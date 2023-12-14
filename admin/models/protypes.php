<?php
require_once "db.php";

class Protypes extends Db
{

    /**
     * LAY TAT CA BANG TRANG THAI
     */
    //Lay danh sach tat ca trangthai:
    static function getAllType()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lay danh sach tat ca trangthai va phan trang:
    
    /**
     * Lay name_trangthai cua job_trangthai thao id_trangthai
     */
   
    public function getType_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes where type_id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items['type_name'];
    }

}
