<?php
require_once "db.php";
class Job_kysu_f extends Db
{
    //lấy ngày ago
    public function timeAgo($time_ago)
    {

        $time_ago = strtotime($time_ago);
        $cur_time   = time();
        $time_elapsed   = $cur_time - $time_ago;
        $seconds    = $time_elapsed;
        $minutes    = round($time_elapsed / 60);
        $hours      = round($time_elapsed / 3600);
        $days       = round($time_elapsed / 86400);
        $weeks      = round($time_elapsed / 604800);
        $months     = round($time_elapsed / 2600640);
        $years      = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return "Mới đăng";
        }
        //Minutes
        else if ($minutes <= 60) {
            if ($minutes == 1) {
                return "1 phút trước";
            } else {
                return "$minutes phút trước";
            }
        }
        //Hours
        else if ($hours <= 24) {
            if ($hours == 1) {
                return "1 giờ trước";
            } else {
                return "$hours giờ trước";
            }
        }
        //Days
        else if ($days <= 7) {
            if ($days == 1) {
                return "1 ngày trước";
            } else {
                return "$days ngày trước";
            }
        }
        //Weeks
        else if ($weeks <= 4.3) {
            if ($weeks == 1) {
                return "1 tuần trước";
            } else {
                return "$weeks tuần trước";
            }
        }
        //Months
        else if ($months <= 12) {
            if ($months == 1) {
                return "1 tháng trước";
            } else {
                return "$months tháng trước";
            }
        }
        //Years
        else {
            if ($years == 1) {
                return "1 năm trước";
            } else {
                return "$years năm trước";
            }
        }
    }
    static function getJob_tuyen_gap($number)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_kysunb
        INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty
        WHERE id_trangthai = 1 AND ngaycuoicung <= DATE_ADD(CURDATE(), INTERVAL 15 DAY)
        ORDER BY created_at ASC LIMIT $number");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả job
    static function getAllJob()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_kysunb  INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty order by created_at desc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Lấy sản phẩm theo id:
     */
    function getJob_Detail($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_kysunb INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty WHERE id_job = ? AND job_kysunb.id_trangthai = 1");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả sản phẩm và phân trang:
    static function getAllJob_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiển thị trên 1 trang).
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT job_kysunb.*,cty.name,cty.img_cty FROM job_kysunb INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty where job_kysunb.id_trangthai = 1 order by job_kysunb.updated_at desc LIMIT $firstLink, $resultsPerPage;");
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
        $sql = self::$connection->prepare("SELECT * FROM job_kysunb INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty where job_kysunb.id_trangthai = 1 ORDER BY created_at DESC LIMIT $number_of_records");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    static function tang_view($id)
    {
        $sql = self::$connection->prepare("UPDATE job_kysunb SET view = view + 1 where id_job = $id");
        $sql->execute();
        
    }
    // tổng số search được
    static function searchJob($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh, $diachi, $search)
    {
        $sql = "SELECT * FROM job_kysunb WHERE ";
        $d = 0;
        if ($id_nganhnghe !== 'all') {
            $sql .= "id_nganhnghe = $id_nganhnghe ";
            $d += 1;
        }

        if ($id_hinhthuc !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_hinhthuc = $id_hinhthuc ";
            $d += 1;
        }

        if ($id_kinhnghiem !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_kinhnghiem = $id_kinhnghiem ";
            $d += 1;
        }

        if ($id_gioitinh !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_gioitinh = $id_gioitinh ";
            $d += 1;
        }

        if ($diachi !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "diachi LIKE '%$diachi%' ";
            $d += 1;
        }
        if ($search !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "chucvu LIKE '%$search%' ";
        }

        $sql .= "AND id_trangthai = 1";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        $items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items;
    }
    // phan trang search
    static function searchJob_and_Phantrang($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh, $diachi,$search, $page, $resultsPerPage)
    {
        $firstLink = ($page - 1) * $resultsPerPage;
        $sql = "SELECT job_kysunb.*,cty.name,cty.img_cty FROM job_kysunb INNER JOIN cty ON job_kysunb.id_cty = cty.id_cty WHERE ";
        $d = 0;
        if ($id_nganhnghe !== 'all') {
            $sql .= "id_nganhnghe = $id_nganhnghe ";
            $d += 1;
        }

        if ($id_hinhthuc !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_hinhthuc = $id_hinhthuc ";
            $d += 1;
        }

        if ($id_kinhnghiem !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_kinhnghiem = $id_kinhnghiem ";
            $d += 1;
        }

        if ($id_gioitinh !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "id_gioitinh = $id_gioitinh ";
            $d += 1;
        }

        if ($diachi !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "diachi LIKE '%$diachi%' ";
            $d += 1;
        }
        if ($search !== 'all') {
            if ($d > 0) $sql .= 'AND ';
            $sql .= "chucvu LIKE '%$search%' ";
        }

        $sql .= "AND id_trangthai = 1 ORDER BY job_kysunb.ngaycuoicung asc LIMIT $firstLink, $resultsPerPage";
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        $items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items;
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
