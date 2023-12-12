<?php
class Job extends Db
{
    //lấy ngày ago
    public function timeAgo($time_ago)
    {
        
        $time_ago = strtotime($time_ago);
        $cur_time   = time();
        $time_elapsed   = $cur_time - $time_ago;
        $seconds    = $time_elapsed ;
        $minutes    = round($time_elapsed / 60 );
        $hours      = round($time_elapsed / 3600);
        $days       = round($time_elapsed / 86400 );
        $weeks      = round($time_elapsed / 604800);
        $months     = round($time_elapsed / 2600640 );
        $years      = round($time_elapsed / 31207680 );
        // Seconds
        if($seconds <= 60){
            return "Mới đăng";
        }
        //Minutes
        else if($minutes <=60){
            if($minutes==1){
                return "1 phút trước";
            }
            else{
                return "$minutes phút trước";
            }
        }
        //Hours
        else if($hours <=24){
            if($hours==1){
                return "1 giờ trước";
            }else{
                return "$hours giờ trước";
            }
        }
        //Days
        else if($days <= 7){
            if($days==1){
                return "1 ngày trước";
            }else{
                return "$days ngày trước";
            }
        }
        //Weeks
        else if($weeks <= 4.3){
            if($weeks==1){
                return "1 tuần trước";
            }else{
                return "$weeks tuần trước";
            }
        }
        //Months
        else if($months <=12){
            if($months==1){
                return "1 tháng trước";
            }else{
                return "$months tháng trước";
            }
        }
        //Years
        else{
            if($years==1){
                return "1 năm trước";
            }else{
                return "$years năm trước";
            }
        }
    }
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
    /**____________________________________________________________________________________________________
     * SEARCHING:
     */
    //(SEARCHING) Tìm kiếm job:
    static function searchJob($keyword) {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE name like '%$keyword%'");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //(SEARCHING + Paging/Pagination) Tìm kiếm job và Phân trang:
    static function searchJob_andCreatePagination($keyword, $page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE name like '%$keyword%' LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
     /**____________________________________________________________________________________________________
     * PAGINATE: ĐÁNH SỐ TRANG, TẠO LINK TỚI CÁC TRANG.
     */
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset) {
        $totalLinks = ceil(floatval($totalResults)/floatval($resultsPerPage));
        $links = "";

        $from = $page - $offset;
        $to = $page + $offset;
        if($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if($to > $totalLinks) {
            $to = $totalLinks;
        }

        $firstLink = "";
        $lastLink = "";
        $prevLink = "";
        $nextLink = "";
        // Trường hợp để xuất hiện $firstLink, $lastLink, $prevLink, $nextLink:
        if($page > 1) {
            $prev = $page - 1;
            $prevLink = "<a style=\"padding:10px;\" href='$url" . "page=$prev'>< Previous</a>";
            $firstLink = "<a style=\"padding:10px;\" href='$url" . "page=1'><< First</a>";
        }
        if($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:10px;\" href='$url" . "page=$next'>Next ></a>";
            $lastLink = "<a style=\"padding:10px;\" href='$url" . "page=$totalLinks'>Last >></a>";
        }
        // $links:
        for($i=$from; $i<=$to; $i++) {
            if($page == $i) {
                $links = $links . "<a style=\"padding:10px;text-decoration:underline;color:red;font-weight:bold;\" href='$url" . "page=$i'>$i</a>";
            }
            else
            {
                $links = $links . "<a style=\"padding:10px;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}
