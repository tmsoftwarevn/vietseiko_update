<?php
class Kinh_nghiem extends Db
{
    //Phuong thuc lay tat ca tai khoan user
    public function getAllKinhNghiem()
    {
        $sql = self::$connection->prepare("SELECT * FROM kinhnghiem");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getKinhNghiem_byId($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM kinhnghiem WHERE id_kn = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $kq = $sql->get_result()->fetch_assoc();
        return $kq['name_kn'];
    }
}
