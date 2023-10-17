<?php
class Protypes_congcu extends Db
{

    // Lấy hết dữ liệu từ bảng Protypes_congcu
    static function getAllProtypes_congcu()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes_congcu");
        $sql->execute();
        $result = $sql->get_result();

        $items = array();
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        return $items;
    }

    // Lấy một bản tin cụ thể bằng ID
    static function getProtypes_congcuById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes_congcu WHERE id_congcu = ?");
        $sql->bind_param("i", $id);
        $sql->execute();

        $result = $sql->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }


}