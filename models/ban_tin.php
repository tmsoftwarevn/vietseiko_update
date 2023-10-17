<?php
class Ban_tin extends Db
{
    // Lấy hết dữ liệu từ bảng "ban_tin"
    static function getAllBan_tin()
    {
        $sql = self::$connection->prepare("SELECT * FROM ban_tin");
        $sql->execute();
        $result = $sql->get_result();

        $items = array();
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        return $items;
    }

    // Lấy một bản tin cụ thể bằng ID
    static function getBan_tinById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM ban_tin WHERE id_bantin = ?");
        $sql->bind_param("i", $id);
        $sql->execute();

        if ($sql->execute()) {
            $result = $sql->get_result();
            $row = $result->fetch_assoc();
            return $row;
        } else {
            // Xử lý lỗi nếu cần
            return null;
        }
    }
}