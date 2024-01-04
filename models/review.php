<?php
require_once "db.php";
class Review_f extends Db
{
    //Lấy danh sách tất cả job
    static function getAll_review()
    {
        $sql = self::$connection->prepare("SELECT * FROM review");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

}
