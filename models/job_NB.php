<?php 
class Job_NB extends Db {

    /**
     * LẤY RA DỮ LIỆU BẢNG job_NB
     */
    static function getAllJob_NB() {
        $sql = self::$connection->prepare("SELECT * FROM job_xkld_nb");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả job_NB và Phân trang:
    static function getAllJob_NB_andCreatePagination($page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage;
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job_xkld_nb order by created_at desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy ra các job_NB mới nhất
     */
    static function getLatestJob_NB($number_of_records) {
        $sql = self::$connection->prepare("SELECT * FROM job_xkld_nb ORDER BY created_at DESC LIMIT 0, $number_of_records");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Lấy chi tiết job_NB:
     */
    function getJob_Detail($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_xkld_nb WHERE id_job = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    function getTypeManuID($id){
        $sql = self::$connection->prepare("SELECT `id_nganhnghe_NB` FROM `job_nhatban` WHERE job_nhatban.id_NB = ?");
        $sql->bind_param("i",$id);
        $sql->execute();//return an object;
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    /**
     * Lấy job_NB theo id_NB
     */
    static function getJob_NB_ByID($id_nb){
        $sql = self::$connection->prepare("SELECT * FROM job_nhatban WHERE id_NB = ?");
        $sql->bind_param("i", $id_nb);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }
    /**____________________________________________________________________________________________________
     * SEARCHING:
     */
    //(SEARCHING) Tìm kiếm sản phẩm:
    static function searchJob_NB($keyword) {
        $sql = self::$connection->prepare("SELECT * FROM job_nhatban WHERE name like '%$keyword%'");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    //(SEARCHING + Paging/Pagination) Tìm kiếm sản phẩm và Phân trang:
    static function searchJob_NB_andCreatePagination($keyword, $page, $resultsPerPage) {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job_nhatban WHERE name like '%$keyword%' LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset) {
        $totalLinks = ceil($totalResults/$resultsPerPage);
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
       // $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
       //  $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
       $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'>Trước</a>";
       // $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>Tiếp</a>";
    }
    if($page < $totalLinks) {
        $next = $page + 1;
        $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'>Trước</a>";
        $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>Tiếp</a>";
        // $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>Sau</a>";
       }
    // $links:
    for($i=$from; $i<=$to; $i++) {
        if($page == $i) {
               $links = $links . "<a style=\"padding:15px;margin:0 5px;text-decoration:underline;color:red;font-weight:bold;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
        }
        else
           {
            $links = $links . "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
        }
       }
    return $firstLink . $prevLink . $links . $nextLink . $lastLink;
}
}
?>