<?php
require_once "db.php";

class Trangthai extends Db
{

    /**
     * LAY TAT CA BANG TRANG THAI
     */
    //Lay danh sach tat ca trangthai:
    static function getAllTrangthai()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_trangthai");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lay danh sach tat ca trangthai va phan trang:
    static function getAllTrangthai_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hien tai - 1) * (So ket qua hien thi tren 1 trang)
        //Dung LIMIT de gioi han so luong ket qua hien thi tren 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job_trangthai order by id_trangthai desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Lay name_trangthai cua job_trangthai thao id_trangthai
     */
    static function getTrangthaiName($id_trangthai)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_trangthai WHERE id_trangthai = ?");
        $sql->bind_param("i", $id_trangthai);
        $sql->execute();
        $type = $sql->get_result()->fetch_assoc();
        return $type['name_trangthai'];
    }
    public function getTrangThai($id)
    {
        $sql = self::$connection->prepare("SELECT name_trangthai FROM job_trangthai WHERE id_trangthai = ?");
        $sql->bind_param('i', $id);
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    function getTrangthaiByID($id_trangthai)
    {
        $sql = self::$connection->prepare("SELECT * FROM `job_trangthai` where id_trangthai = ?");
        $sql->bind_param("i", $id_trangthai);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Xoa job_trangthai theo id_trangthai
     */
    static function deleteTrangThai_ByTrangThaiID($id_trangthai)
    {
        $sql = self::$connection->prepare("DELETE FROM job_trangthai WHERE id_trangthai = ?");
        $sql->bind_param("i", $id_trangthai);
        $sql->execute();
    }
    /**
     * Them job_trangthai
     */
    function addTrangthai($name, $img)
    {
        //$img = "../../mobile/public/images/".$img;
        $sql = self::$connection->prepare("INSERT INTO `job_trangthai`(`name_trangthai`, `img_trangthai`)
        VALUES ('$name','$img')");
        //$sql->bind_param($name,$img);
        //$sql->bind_param(2,$img);
        return $sql->execute();
    }
    /**
     * Sua job_trangthai
     */
    function updateTrangthai($id_trangthai, $name_trangthai, $img_trangthai)
    {
        if ($img_trangthai != "") {
            $sql = self::$connection->prepare("UPDATE `job_trangthai` SET `name_trangthai` = ?, `img_trangthai` = ? WHERE `id_trangthai` like ?");
            $sql->bind_param("ssi", $name_trangthai, $img_trangthai, $id_trangthai);
        } else {
            $sql = self::$connection->prepare("UPDATE `job_trangthai` SET `name_trangthai` = ? WHERE `id_trangthai` like ?");
            $sql->bind_param("si", $name_trangthai, $id_trangthai);
        }
        return $sql->execute();
    }
}
