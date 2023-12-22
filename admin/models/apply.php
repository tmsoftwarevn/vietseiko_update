<?php

class Apply extends Db
{

    static function getAll_cv()
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen");
        $sql->execute();
      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    public function insert_apply($name, $email, $phone, $namsinh, $mucluong, $khuvuc, $vi_tri, $link_cv, $id_job)
    {
        $sql = self::$connection->prepare("INSERT INTO `ung_tuyen`(`name`, `email`, `phone`, `nam_sinh`, `muc_luong`, `khu_vuc`, `vi_tri_ung_tuyen`, `link_cv`, `id_job`, `type_id`) 
        VALUES ('$name','$email','$phone','$namsinh','$mucluong','$khuvuc','$vi_tri','$link_cv','$id_job','1')");
        return $sql->execute();
    }

    static function getAll_CV_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang)
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang: order by updated_at desc LIMIT $firstLink, $resultsPerPage
        $sql = self::$connection->prepare("SELECT ung_tuyen.*,job.job_code from ung_tuyen INNER JOIN job ON ung_tuyen.id_job=job.id_job LIMIT $firstLink, $resultsPerPage; ");
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
