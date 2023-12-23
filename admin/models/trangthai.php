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

    public function getTrangthaiByID($id_trangthai)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_trangthai where id_trangthai = ?");
        $sql->bind_param("i", $id_trangthai);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->fetch_assoc();
        return $items['name_trangthai'];
    }

    
}
