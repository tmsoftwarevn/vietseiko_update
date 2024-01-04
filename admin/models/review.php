<?php
require_once "db.php";
class Review extends Db
{
    /**
     * LẤY DỮ LIỆU BẢNG JOB
     */
    //Lấy danh sách tất cả job
    static function getAll_review()
    {
        $sql = self::$connection->prepare("SELECT * FROM review ");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy sản phẩm theo id:
     */
    public function getReview_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM review WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }

    public function update($id, $name, $anh, $mota)
    {
        $sql = self::$connection->prepare("UPDATE `review` SET `img_review`='$anh',`name`='$name',`mota`='$mota' WHERE id = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}
