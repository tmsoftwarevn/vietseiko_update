<?php
require_once "db.php";
class Nganhnghe extends Db
{
    /**
     * Lấy dữ liệu bảng Job nganhnghe
     */
    static function getAllNganhnghe()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_nganhnghe");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    /**____________________________________________________________________________________________________
     * LẤY Ngành nghề THEO id:
     */
    static function getBrand($id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_nganhnghe  WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
        $brand = $sql->get_result()->fetch_assoc();
        return $brand['name_nganhnghe'];
    }

    //Lấy danh sách tất cả job nganhnghe và Phân trang:
    static function getAllNganhnghe_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang)
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * from job_nganhnghe order by id_nganhnghe desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**
     * Lấy name_nganhnghe của job nganhnghe theo id_nganhnghe
     */
    static function getNganhngheName($id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_nganhnghe WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
        $type = $sql->get_result()->fetch_assoc();
        return $type['name_nganhnghe'];
    }
    /**
     * Lấy nganh nghe theo id
     */
    function getNganhngheByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `job_nganhnghe` where id_nganhnghe = ? ");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Xóa nganhnghe theo id_nganhnghe
     */
    static function deleteNganhnghe_ByTypeID($id_nganhnghe)
    {
        $sql = self::$connection->prepare("DELETE FROM job_nganhnghe WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
    }

    /**
     * Thêm Job nganhnghe
     */
    function addNganhNghe($name, $img)
    {
        //$img = "../../mobile/public/images/".$img;
        $sql = self::$connection->prepare("INSERT INTO `job_nganhnghe`(`name_nganhnghe`, `img_nganhnghe`)
        VALUES ('$name','$img')");
        //$sql->bind_param($name,$img);
        //$sql->bind_param(2,$img);
        return $sql->execute();
    }

    /**
     * Sửa Job nganhnghe
     */
    static function updateJobNganhnghe($id_nganhnghe, $name_nganhnghe)
    {
        $sql = self::$connection->prepare("UPDATE job_nganhnghe SET name_nganhnghe ='$name_nganhnghe' WHERE id_nganhnghe=$id_nganhnghe");
        return $sql->execute();
    }

    function updateNganhnghe($id, $name, $img)
    {
        if ($img !== "") {
            $sql = self::$connection->prepare("UPDATE `job_nganhnghe` SET `name_nganhnghe`=?, `img_nganhnghe`=? WHERE `id_nganhnghe` like $id");
            $sql->bind_param("ss", $name, $img);
        } else {
            $sql = self::$connection->prepare("UPDATE `job_nganhnghe` SET `name_nganhnghe`=? WHERE `id_nganhnghe` like $id");
            $sql->bind_param("s", $name);
        }
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
