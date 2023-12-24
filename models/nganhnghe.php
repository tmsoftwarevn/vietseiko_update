

<?php

class Nganhnghe_f extends Db
{
    //Lấy ra tất cả bảng Nganhnghe
    function getAllNganhNghe()
    {
        $sql = self::$connection->prepare("SELECT * FROM `job_nganhnghe`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //
    
    //
    function getNganhngheNameID($id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT `name_nganhnghe` FROM `job_nganhnghe` WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //
    function getAllJobByNganhNghe($id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM `job` WHERE id_nganhnghe = ?");
        $sql->bind_param("i", $id_nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
