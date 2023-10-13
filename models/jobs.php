<?php
class Job extends Db
{
    /**
     * LẤY DỮ LIỆU BẢNG JOB
     */
    //Lấy danh sách tất cả sản phẩm:
    static function getAllJob()
    {
        $sql = self::$connection->prepare("SELECT * FROM job order by id_job desc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả job và Phân trang:
    static function getAllJob_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage;
        $sql = self::$connection->prepare("SELECT * FROM job order by created_at desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Lấy ra các job mới nhất:
     */
    static function getLatestJob($number_of_records)
    {
        $sql = self::$connection->prepare("SELECT * FROM job ORDER BY created_at DESC LIMIT 0, $number_of_records");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Lấy job theo id:
     */
    static function getJob_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_job = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }
    /**
     * Lấy chi tiết JOB:
     */
    function getJob_Detail($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_job = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //
    function getNN_HTID($id)
    {
        $sql = self::$connection->prepare("SELECT `id_nganhnghe`.`id_hinhthuc` FROM `job` WHERE job.ID = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function getRelatedJob($id_nganhnghe, $id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM `job` WHERE `job`.`id_nganhnghe` = $id_nganhnghe AND `job`.`id_hinhthuc` = $id_hinhthuc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**____________________________________________________________________________________________________
     * LẤY DANH SÁCH JOB THEO type_id:
     */
    static function getJob_ByTypeID($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE type_id like ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //Lấy ra các Job cùng một loại và Phân trang:
    static function getJob_ByTypeID_andCreatePagination($type_id, $page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE type_id = ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }

    /**____________________________________________________________________________________________________
     * LẤY DANH SÁCH JOB THEO nganhnghe:
     */
    static function getJob_ByNganhngheID($nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe like ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //Lấy ra các job cùng một hãng và Phân trang:
    static function getJob_ByNganhngheID_andCreatePagination($nganhnghe, $page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe = ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("i", $nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    /**____________________________________________________________________________________________________
     * LẤY DANH SÁCH JOB THEO type_id và id_nganhnghe:
     */
    static function getJob_ByTypeAndNN($type_id, $id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE type_id like ? AND id_nganhnghe like ?");
        $sql->bind_param("ii", $type_id, $id_nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //Lấy ra các job  và Phân trang:
    static function getJob_ByTypeAndManu_andCreatePagination($type_id, $id_nganhnghe, $page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE type_id like ? AND id_nganhnghe like ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("ii", $type_id, $id_nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    /**
     * LẤY DANH SÁCH JOB THEO id_nganhnghe và id_hinhthuc:
     */
    static function getJob_ByNNAndHinhThuc($id_nganhnghe, $id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe like ? AND id_hinhthuc like ?");
        $sql->bind_param("ii", $id_nganhnghe, $id_hinhthuc);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy ra các job và Phân trang:
    static function getJob_ByNNAndHinhthuc_andCreatePagination($id_nganhnghe, $id_hinhthuc, $page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe like ? AND id_hinhthuc like ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("ii", $id_nganhnghe, $id_hinhthuc);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
}
