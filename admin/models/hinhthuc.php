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

    /**____________________________________________________________________________________________________
     * THÊM Hinhthuc:
     */
    static function insertHinhthuc($name_hinhthuc) {
        $sql = self::$connection->prepare("INSERT INTO job_hinhthuc(name_hinhthuc) VALUES('$name_hinhthuc')");
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

   
}
