<?php
require_once "db.php";
class Vietseiko extends Db
{
    static function get_jobcode($id)
    {
        // echo 'check idđ: '.$id;
        $sql = self::$connection->prepare("SELECT * FROM job_vietseiko WHERE id_job = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $type = $sql->get_result()->fetch_assoc();
        return $type;
       
    }
    //Lấy danh sách tất cả job
    static function getAllJob()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_vietseiko order by created_at desc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả sản phẩm và phân trang:
    static function getAllJob_andCreatePagination($page, $resultsPerPage)
    {     
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        $sql = self::$connection->prepare("SELECT job_vietseiko.*,cty.name FROM job_vietseiko INNER JOIN cty ON job_vietseiko.id_cty = cty.id_cty order by job_vietseiko.created_at desc LIMIT $firstLink, $resultsPerPage;");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }


    /**
     * Lấy sản phẩm theo id:
     */
    public function getJob_vietseiko_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT job_vietseiko.*,cty.name FROM job_vietseiko INNER JOIN cty ON job_vietseiko.id_cty = cty.id_cty WHERE id_job = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }


    /**
     * XÓA JOB THEO id
     */
    static function deleteJob_ByTypeID($id_job)
    {
        $sql = self::$connection->prepare("DELETE FROM job_vietseiko WHERE id_job = ?");
        $sql->bind_param("i", $id_job);
        $sql->execute();
    }

    /**
     * Thêm mới JOB:
     */
    public function insertJob($chucvu, $capbac, $job_code, $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $id_gioitinh, $mucluong, $diachi, $diachi_cuthe, $mota, $yeucau, $quyenloi, $other, $id_cty, $age,$slug_custom )
    {
        $sql = self::$connection->prepare("INSERT INTO `job_vietseiko`( `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_cty`, `age`, `slug`) 
        VALUES ('$chucvu','$capbac','$job_code','$id_nganhnghe','$id_hinhthuc','$soluong','$id_kinhnghiem','$ngaycuoicung','$id_gioitinh','$mucluong','$diachi','$diachi_cuthe','$mota','$yeucau','$quyenloi','$other','$id_cty','$age','$slug_custom')");
        return $sql->execute();
    }
    // update job
    static function updateJob($id_job,$chucvu, $capbac, $job_code, $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $id_gioitinh, $mucluong, $diachi, $diachi_cuthe, $mota, $yeucau, $quyenloi, $other, $id_cty, $age, $slug_custom)
    {
        $sql = self::$connection->prepare("UPDATE `job_vietseiko` SET `chucvu`='$chucvu',`capbac`='$capbac',`job_code`='$job_code',`id_nganhnghe`='$id_nganhnghe',`id_hinhthuc`='$id_hinhthuc',`soluong`='$soluong',`id_kinhnghiem`='$id_kinhnghiem',`ngaycuoicung`='$ngaycuoicung',`id_gioitinh`='$id_gioitinh',`mucluong`='$mucluong',
        `diachi`='$diachi',`diachi_cuthe`='$diachi_cuthe',`mota`='$mota',`yeucau`='$yeucau',`quyenloi`='$quyenloi',`thongtin_khac`='$other',`id_cty`='$id_cty',`age`='$age',`slug`='$slug_custom' where id_job = $id_job");

        return $sql->execute();
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
            $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
            $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>></a>";
            $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>>></a>";
        }
        // $links:
        for ($i = $from; $i <= $to; $i++) {
            if ($page == $i) {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;text-decoration:underline;color:red;font-weight:bold;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            } else {
                $links = $links . "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}
