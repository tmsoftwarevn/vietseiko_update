<?php

class Apply extends Db {

    /**
     * LẤY DỮ LIỆU BẢNG apply
     */
    //Lấy danh sách tất cả apply:
    static function getAllApply(){
        $sql = self::$connection->prepare("SELECT * FROM apply");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả apply và phân trang:
    static function getAllApply_andCreatePagination($page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM apply LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**
     * LẤY DANH SÁCH APPLY THEO job_id:
     */
    static function getApply_ByJobID($job_id) {
        $sql = self::$connection->prepare("SELECT * FROM apply WHERE id_job like");
        $sql->bind_param("i", $job_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy ra các apply và Phân trang:
    static function getApply_ByJobID_andCreatePagination($job_id, $page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM apply WHERE id_job = ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("i", $job_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**
     * THÊM apply
     */
    static function insertReview($id_job, $hoten, $email, $sdt, $noidung) {
        $sql = self::$connection->prepare("INSERT INTO apply VALUES(NULL, $id_job, '$hoten', '$email', '$sdt', '$noidung')");
        return $sql->execute();
    }

    /**____________________________________________________________________________________________________
     * PAGINATE: ĐÁNH SỐ TRANG, TẠO LINK TỚI CÁC TRANG.
     */
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset) {
        $totalLinks = ceil(floatval($totalResults)/floatval($resultsPerPage));
        $links = "";

        $from = $page - $offset;
        $to = $page + $offset;
        if($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if($to > $totalLinks) {
            $to = $totalLinks;
        }

        $firstLink = "";
        $lastLink = "";
        $prevLink = "";
        $nextLink = "";
        // Trường hợp để xuất hiện $firstLink, $lastLink, $prevLink, $nextLink:
        if($page > 1) {
            $prev = $page - 1;
            $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
            $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
        }
        if($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>></a>";
            $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>>></a>";
        }
        // $links:
        for($i=$from; $i<=$to; $i++) {
            if($page == $i) {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;text-decoration:underline;color:red;font-weight:bold;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            }
            else
            {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}

?>