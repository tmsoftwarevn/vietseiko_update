<?php
//require_once "db.php";
class Image_f extends Db
{
    public function getAll()
    {
        $sql = self::$connection->prepare("SELECT * FROM anh_banner ");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getAll_imgBy_id($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM anh_banner where type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    public function getdetail_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM anh_banner WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }

    public function update($id, $name, $anh)
    {
        $sql = self::$connection->prepare("UPDATE `anh_banner` SET `img`='$anh',`name`='$name' WHERE id = ? ");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    static function insert($name, $anh,$type_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `anh_banner`(`name`, `img`,`type_id`) 
        VALUES ('$name','$anh','$type_id')");

        return $sql->execute();
    }

    static function delete_ByID($id)
    {
        $sql = self::$connection->prepare("DELETE FROM anh_banner WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }


}
