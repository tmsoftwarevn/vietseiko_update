<?php

class Apply extends Db
{
    // đếm tổng
    static function getAll_cv($type_id)
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen INNER JOIN job ON ung_tuyen.id_job=job.id_job WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    static function getAll_cv_vietseiko($type_id)
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen INNER JOIN job_vietseiko ON ung_tuyen.id_job=job_vietseiko.id_job WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    static function getAll_cv_xkld($type_id)
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen INNER JOIN job_xkld_nb ON ung_tuyen.id_job=job_xkld_nb.id_job WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    
    static function getAll_cv_ksnb($type_id)
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen INNER JOIN job_kysunb ON ung_tuyen.id_job=job_kysunb.id_job WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute();      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    // insert dùng chung 4 job, qua id
    public function insert_apply($name, $email, $phone, $namsinh, $mucluong, $khuvuc, $vi_tri, $link_cv, $id_job, $type_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `ung_tuyen`(`name`, `email`, `phone`, `nam_sinh`, `muc_luong`, `khu_vuc`, `vi_tri_ung_tuyen`, `link_cv`, `id_job`, `type_id`) 
        VALUES ('$name','$email','$phone','$namsinh','$mucluong','$khuvuc','$vi_tri','$link_cv','$id_job',' $type_id')");
        return $sql->execute();
    }
    // chia ra 4 job
    static function getAll_CV_andCreatePagination($page, $resultsPerPage,$type_id)
    {
  
        $firstLink = ($page - 1) * $resultsPerPage; 
        $sql = self::$connection->prepare("SELECT ung_tuyen.*,job.job_code,job.id_job from ung_tuyen INNER JOIN job ON ung_tuyen.id_job=job.id_job where ung_tuyen.type_id = ? order by ung_tuyen.created_at desc LIMIT $firstLink, $resultsPerPage; ");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    static function getAll_xkld_andCreatePagination($page, $resultsPerPage,$type_id)
    {
  
        $firstLink = ($page - 1) * $resultsPerPage; 
        $sql = self::$connection->prepare("SELECT ung_tuyen.*,job_xkld_nb.job_code,job_xkld_nb.id_job from ung_tuyen INNER JOIN job_xkld_nb ON ung_tuyen.id_job=job_xkld_nb.id_job where ung_tuyen.type_id = ? order by ung_tuyen.created_at desc LIMIT $firstLink, $resultsPerPage; ");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
   
    static function getAll_kysunb_andCreatePagination($page, $resultsPerPage,$type_id)
    {
  
        $firstLink = ($page - 1) * $resultsPerPage; 
        $sql = self::$connection->prepare("SELECT ung_tuyen.*,job_kysunb.job_code,job_kysunb.id_job from ung_tuyen INNER JOIN job_kysunb ON ung_tuyen.id_job=job_kysunb.id_job where ung_tuyen.type_id = ? order by ung_tuyen.created_at desc LIMIT $firstLink, $resultsPerPage; ");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    static function getAll_vietseiko_andCreatePagination($page, $resultsPerPage,$type_id)
    {
  
        $firstLink = ($page - 1) * $resultsPerPage; 
        $sql = self::$connection->prepare("SELECT ung_tuyen.*,job_vietseiko.job_code,job_vietseiko.id_job from ung_tuyen INNER JOIN job_vietseiko ON ung_tuyen.id_job=job_vietseiko.id_job where ung_tuyen.type_id = ? order by ung_tuyen.created_at desc LIMIT $firstLink, $resultsPerPage; ");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
    /**____________________________________________________________________________________________________
     * PAGINATE: ĐÁNH SỐ TRANG, TẠO LINK TỚI CÁC TRANG.
     */
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset)
    {
        $totalLinks = ceil(floatval($totalResults) / floatval($resultsPerPage));
        $links = "";

        $from = $page - $offset;
        $to = $page + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }

        $firstLink = "";
        $lastLink = "";
        $prevLink = "";
        $nextLink = "";
        // Trường hợp để xuất hiện $firstLink, $lastLink, $prevLink, $nextLink:
        if ($page > 1) {
            $prev = $page - 1;
            $prevLink = "<a style=\"padding:10px;\" href='$url" . "page=$prev'>< Previous</a>";
            $firstLink = "<a style=\"padding:10px;\" href='$url" . "page=1'><< First</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:10px;\" href='$url" . "page=$next'>Next ></a>";
            $lastLink = "<a style=\"padding:10px;\" href='$url" . "page=$totalLinks'>Last >></a>";
        }
        // $links:
        for ($i = $from; $i <= $to; $i++) {
            if ($page == $i) {
                $links = $links . "<a style=\"padding:10px;text-decoration:underline;color:red;font-weight:bold;\" href='$url" . "page=$i'>$i</a>";
            } else {
                $links = $links . "<a style=\"padding:10px;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}
