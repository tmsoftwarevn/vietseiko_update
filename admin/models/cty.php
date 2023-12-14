<?php
require_once "db.php";
class Congty extends Db
{
    /**
     * Lấy dữ liệu bảng Job hinhthuc
     */
    static function getAllCty()
    {
        $sql = self::$connection->prepare("SELECT cty.*,protypes.* FROM cty INNER JOIN protypes ON cty.type_id=protypes.type_id");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //Lấy danh sách tất cả job hinhthuc và Phân trang:
    static function getAllcty_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang)
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang: order by updated_at desc LIMIT $firstLink, $resultsPerPage
        $sql = self::$connection->prepare("SELECT cty.*,protypes.* FROM cty INNER JOIN protypes ON cty.type_id=protypes.type_id order by updated_at desc LIMIT $firstLink, $resultsPerPage; ");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**
     * Lấy name_hinhthuc của job hinhthuc theo id_hinhthuc
     */
    static function getCty_byId($id)
    {
        $sql = self::$connection->prepare("SELECT cty.*,protypes.* FROM cty INNER JOIN protypes ON cty.type_id=protypes.type_id WHERE id_cty = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $item = $sql->get_result()->fetch_assoc();
        return $item;
    }

    /**
     * Xóa hinhthuc theo id_hinhthuc
     */
    static function delete_Cty($id)
    {
        $sql = self::$connection->prepare("DELETE FROM cty WHERE id_cty = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }

    /**____________________________________________________________________________________________________
     * THÊM cty:
     */
    public function insertCty($name, $img_logo, $quymo,$thongtin,$diachi,$type)
    {
        $sql = self::$connection->prepare("INSERT INTO `cty`(`img_cty`, `name`, `quymo`, `about_cty`, `address`, `type_id`) 
        VALUES ('$img_logo','$name','$quymo','$thongtin','$diachi','$type')");
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
