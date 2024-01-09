<?php

class Hinhanh_Video extends Db
{
    //Lấy danh sách tất cả job
    static function getAll_hinhanh_video()
    {
        $sql = self::$connection->prepare("SELECT * FROM hinhanh_video order by created_at desc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả sản phẩm và phân trang:
    public function getAll_hinhanh_video_andCreatePagination($page, $resultsPerPage,$type)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM hinhanh_video WHERE `type` = ? order by created_at desc LIMIT $firstLink, $resultsPerPage;");
        $sql->bind_param("i", $type);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy all theo type:
     */
    public function get_hinhanh_video_ByType($type)
    {
        $sql = self::$connection->prepare("SELECT * FROM hinhanh_video WHERE `type` = ? order by created_at desc ");
        $sql->bind_param("i", $type);
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function get_hinhanh_video_ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM hinhanh_video WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $item = $sql->get_result()->fetch_assoc();
        return $item;
    }

    /**
     * XÓA JOB THEO id
     */
    static function delete_byID($id)
    {
        $sql = self::$connection->prepare("DELETE FROM hinhanh_video WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }

    /**
     * Thêm mới JOB:
     */
    public function insert_hinhanh_video($path,$type)
    {
        $sql = self::$connection->prepare("INSERT INTO `hinhanh_video`(`path`,`type`) 
        VALUES ('$path','$type')");
        return $sql->execute();
    }
    // update job
    public function update_hinhanh_video($id, $path)
    {
        $sql = self::$connection->prepare("UPDATE `hinhanh_video` SET `path`='$path' WHERE id = $id");

        return $sql->execute();
    }

    /**____________________________________________________________________________________________________
     * PAGINATE: ĐÁNH SỐ TRANG, TẠO LINK TỚI CÁC TRANG.
     */
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset)
    {
        $totalLinks = ceil(floatval($totalResults) / floatval($resultsPerPage));
        $links = "";

        $from = $page - $offset;
        $to = $page + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }

        $firstLink = "";
        $lastLink = "";
        $prevLink = "";
        $nextLink = "";
        // Trường hợp để xuất hiện $firstLink, $lastLink, $prevLink, $nextLink:
        if ($page > 1) {
            $prev = $page - 1;
            $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
            $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>></a>";
            $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>>></a>";
        }
        // $links:
        for ($i = $from; $i <= $to; $i++) {
            if ($page == $i) {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;text-decoration:underline;color:red;font-weight:bold;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            } else {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}
