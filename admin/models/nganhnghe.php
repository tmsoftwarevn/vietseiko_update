

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
     * Xóa nganhnghe theo id_nganhnghe
     */
    static function deleteNganhnghe_ByTypeID($id_nganhnghe)
    {
        $sql = self::$connection->prepare("DELETE FROM job_nganhnghe WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
    }

    /**____________________________________________________________________________________________________
     * THÊM nganhnghe:
     */
    static function insertNganhnghe($name) {
        $sql = self::$connection->prepare("INSERT INTO `job_nganhnghe`(`name_nganhnghe`)
        VALUES ('$name')");
        return $sql->execute();
    }

    static function updateNganhnghe($id, $name)
    {
        $sql = self::$connection->prepare("UPDATE `job_nganhnghe` SET `name_nganhnghe`='$name' WHERE id_nganhnghe = $id");
        return $sql->execute();
    }
   
}
