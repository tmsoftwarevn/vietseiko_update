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
    static function deleteKinhnghiem($id)
    {
        $sql = self::$connection->prepare("DELETE FROM kinhnghiem WHERE id_kn = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }
    static function insertKinhnghiem($name) {
        $sql = self::$connection->prepare("INSERT INTO kinhnghiem(name_kn) VALUES('$name')");
        return $sql->execute();
    }
    /**
     * Sửa Job hinhthuc
     */
    static function updateKinhnghiem($id, $name)
    {
        $sql = self::$connection->prepare("UPDATE kinhnghiem SET name_kn ='$name' WHERE id_kn=$id");
        return $sql->execute();
    }
}
