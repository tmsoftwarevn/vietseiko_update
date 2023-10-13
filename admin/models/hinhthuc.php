<?php
require_once "db.php";
class Hinhthuc extends Db
{
    /**
     * Lấy dữ liệu bảng Job hinhthuc
     */
    static function getAllHinhthuc()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_hinhthuc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //Lấy danh sách tất cả job hinhthuc và Phân trang:
    static function getAllHinhThuc_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang)
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * from job_hinhthuc order by id_hinhthuc desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**
     * Lấy name_hinhthuc của job hinhthuc theo id_hinhthuc
     */
    static function getHinhthucName($id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_hinhthuc WHERE id_hinhthuc = ?");
        $sql->bind_param("i", $id_hinhthuc);
        $sql->execute();
        $type = $sql->get_result()->fetch_assoc();
        return $type['name_hinhthuc'];
    }

    /**
     * Xóa hinhthuc theo id_hinhthuc
     */
    static function deleteHinhthuc_ByTypeID($id_hinhthuc)
    {
        $sql = self::$connection->prepare("DELETE FROM job_hinhthuc WHERE id_hinhthuc = ?");
        $sql->bind_param("i", $id_hinhthuc);
        $sql->execute();
    }

    /**
     * Thêm Job nganhnghe
     */
    function addHinhthuc($name, $img)
    {
        //$img = "../../mobile/public/images/".$img;
        $sql = self::$connection->prepare("INSERT INTO `job_hinhthuc`(`name_hinhthuc`, `img_hinhthuc`)
        VALUES ('$name','$img')");
        //$sql->bind_param($name,$img);
        //$sql->bind_param(2,$img);
        return $sql->execute();
    }
    /**
     * Sửa Job hinhthuc
     */
    static function updateJobHinhthuc($id_hinhthuc, $name_hinhthuc)
    {
        $sql = self::$connection->prepare("UPDATE job_hinhthuc SET name_hinhthuc ='$name_hinhthuc' WHERE id_hinhthuc=$id_hinhthuc");
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
            $prevLink = "<a style=\"padding:10px;\" href='$url" . "page=$prev'>< Previous</a>";
            $firstLink = "<a style=\"padding:10px;\" href='$url" . "page=1'><< First</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:10px;\" href='$url" . "page=$next'>Next ></a>";
            $lastLink = "<a style=\"padding:10px;\" href='$url" . "page=$totalLinks'>Last >></a>";
        }
        // $links:
        for ($i = $from; $i <= $to; $i++) {
            if ($page == $i) {
                $links = $links . "<a style=\"padding:10px;text-decoration:underline;color:red;font-weight:bold;\" href='$url" . "page=$i'>$i</a>";
            } else {
                $links = $links . "<a style=\"padding:10px;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}
