<?php
class Nganhnghe_NB extends Db
{
    //Lấy tất cả nganhnghe_NB:
    function getAllNganhNghe_NB()
    {
        $sql = self::$connection->prepare("SELECT * FROM `nganhnghe_nb`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy job_nb By nganhnghe_nb:
    function getNganhngheNBByID($id_nganhnghe_NB)
    {
        $sql = self::$connection->prepare("SELECT * FROM `nganhnghe_nb` WHERE id_nganhnghe_NB = ?");
        $sql->bind_param("i", $id_nganhnghe_NB);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    function getNganhngheNB_NameByID($id_nganhnghe_NB)
    {
        $sql = self::$connection->prepare("SELECT `name_nn_NB` FROM `nganhnghe_nb` WHERE id_nganhnghe_NB = ?");
        $sql->bind_param("i", $id_nganhnghe_NB);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        echo 'checkk item' . print_r($items);
        return $items;
    }

    function getAllJobNB_ByNganhngheNB($id_nganhnghe_NB)
    {
        $sql = self::$connection->prepare("SELECT * FROM `job_nhatban` WHERE id_nganhnghe_NB = ?");
        $sql->bind_param("i", $id_nganhnghe_NB);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
