<?php
class Gioi_tinh extends Db
{
    //Phuong thuc lay tat ca tai khoan user
    public function getAllGioitinh()
    {
        $sql = self::$connection->prepare("SELECT * FROM gioitinh");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getGioitinh_byId($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM gioitinh WHERE id_gt = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $kq = $sql->get_result()->fetch_assoc();
        return $kq['name_gt'];
    }
}
