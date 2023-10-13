<?php
require_once "db.php";
class Job extends Db
{
    /**
     * LẤY DỮ LIỆU BẢNG JOB
     */
    //Lấy danh sách tất cả job
    static function getAllJob()
    {
        $sql = self::$connection->prepare("SELECT * FROM job order by id_job desc");
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
     * Lấy sản phẩm theo id:
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
     * LẤY DANH SÁCH JOB THEO id_nganhnghe
     */
    static function getJob_ByNganhNgheID($nganhnghe_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe like ?");
        $sql->bind_param("i", $nganhnghe_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getNganhNghe($id)
    {
        $sql = self::$connection->prepare("SELECT name_nganhnghe FROM job_nganhnghe WHERE id_nganhnghe = ?");
        $sql->bind_param('i', $id);
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy ra các job cùng một cty và phân trang:
    static function getJob_ByNganhNgheID_andCreatePagination($nganhnghe_id, $page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage;
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_nganhnghe = ? LIMIT $firstLink, $resultsPerPage");
        $sql->bind_param("i", $nganhnghe_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * LẤY DANH SÁCH JOB THEO id_hinhthuc và id_nganhnghe
     */
    static function getJob_ByHinhthucAndNganhnghe($id_hinhthuc, $id_nganhnghe)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_hinhthuc like ? AND id_nganhnghe like ?");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy ra các job cùng một cty và phân trang:
    static function getJob_ByHinhthucAndNganhnghe_andCreatePagination(
        $id_hinhthuc,
        $id_nganhnghe,
        $page,
        $resultPerPage
    ) {
        $firstLink = ($page - 1) * $resultPerPage;
        $sql = self::$connection
            ->prepare("SELECT * FROM job WHERE id_hinhthuc like ? AND id_nganhnghe like ? LIMIT $firstLink, $resultPerPage");
        $sql->bind_param("ii", $id_hinhthuc, $id_nganhnghe);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * LẤY DANH SÁCH JOB THEO id_hinhthuc
     */
    static function getJob_ByHinhthucID($id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_hinhthuc like ?");
        $sql->bind_param("i", $id_hinhthuc);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy ra các job cùng mọt hình thức và phân trang:
    static function getJob_ByHinhthucID_andCreatePagination($id_hinhthuc, $page, $resultPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultPerPage;
        //Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE id_hinhthuc = ? LIMIT $firstLink, $resultPerPage");
        $sql->bind_param("i", $id_hinhthuc);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * XÓA JOB THEO id
     */
    static function deleteJobByID($id_job)
    {
        $sql = self::$connection->prepare("DELETE FROM job WHERE id = ?");
        $sql->bind_param("i", $id_job);
        $sql->execute();
    }

    /**
     * Thêm JOB:
     */
    static function insertJob($tencongty, $chucvu, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at)
    {
        $sql = self::$connection->prepare("UPDATE INTO job(id_job, tencongty, chucvu, img_cty, id_nganhnghe, id_hinhthuc, soluong, kinhnghiem, ngaydang, ngaycuoicung, ngaygan, gioitinh, mucluong, diachi, mota, yeucau, quyenloi, trangthai, created_at)
        VALUES(0, '$tencongty', $chucvu, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at)");
        return $sql->execute();
    }
    function addJob($tencongty, $chucvu, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at)
    {
        $sql = self::$connection->prepare("INSERT INTO `job`(`tencongty`, `chucvu`, `img_cty`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `kinhnghiem`, `ngaydang`, `ngaycuoicung`, `ngaygan`, `gioitinh`, `mucluong`, `diachi`, `mota`, `yeucau`, `quyenloi`, `id_trangthai`, `created_at`)");
        $sql->bind_param("siissiissiissiissi", $tencongty, $chucvu, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at);
        return $sql->execute();
    }
    function addJobWOImg($tencongty, $chucvu, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at)
    {
        $img_cty = "";
        $sql = self::$connection->prepare("INSERT INTO `job`(`tencongty`, `chucvu`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `kinhnghiem`, `ngaydang`, `ngaycuoicung`, `ngaygan`, `gioitinh`, `mucluong`, `diachi`, `mota`, `yeucau`, `quyenloi`, `id_trangthai`, `created_at`)");
        $sql->bind_param(':tencongty', $tencongty);
        $sql->bind_param(':chucvu', $chucvu);
        $sql->bind_param(':id_nganhnghe', $id_nganhnghe);
        $sql->bind_param(':id_hinhthuc', $id_hinhthuc);
        $sql->bind_param(':soluong', $soluong);
        $sql->bind_param(':kinhnghiem', $kinhnghiem);
        $sql->bind_param(':ngaydang', $ngaydang);
        $sql->bind_param(':ngaycuoicung', $ngaycuoicung);
        $sql->bind_param(':ngaygan', $ngaygan);
        $sql->bind_param(':gioitinh', $gioitinh);
        $sql->bind_param(':diachi', $diachi);
        $sql->bind_param(':mota', $mota);
        $sql->bind_param(':yeucau', $yeucau);
        $sql->bind_param(':quyenloi', $quyenloi);
        $sql->bind_param(':id_trangthai', $id_trangthai);
        $sql->bind_param(':create_at', $create_at);
        return $sql->execute();
    }

    /**
     * SEARCHING
     */
    //(SEARCHING) Tìm kiếm job:
    static function searchJob($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM job WHERE name like '%$keyword%'");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //(SEARCHING + Paging/Pagination) Tìm kiếm sản phẩm và Phân trang:
    static function secarchJob_andCreatePagination($keyword, $page, $resultPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultPerPage;
        //Dùng LIMIT để giới hạn số lượng kết quả hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM job WHERE name like '%$keyword% LIMIT $firstLink, $resultPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**____________________________________________________________________________________________________
     * PAGINATE: ĐÁNH SỐ TRANG, TẠO LINK TỚI CÁC TRANG.
     */
    // static function paginate($url, $page, $totalResults, $resultsPerPage, $offset) {
    //     $totalLinks = ceil(floatval($totalResults)/floatval($resultsPerPage));
    //     $links = "";

    //     $from = $page - $offset;
    //     $to = $page + $offset;
    //     if($from <= 0) {
    //         $from = 1;
    //         $to = $offset * 2;
    //     }
    //     if($to > $totalLinks) {
    //         $to = $totalLinks;
    //     }

    //     $firstLink = "";
    //     $lastLink = "";
    //     $prevLink = "";
    //     $nextLink = "";
    //     // Trường hợp để xuất hiện $firstLink, $lastLink, $prevLink, $nextLink:
    //     if($page > 1) {
    //         $prev = $page - 1;
    //         $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
    //         $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
    //     }
    //     if($page < $totalLinks) {
    //         $next = $page + 1;
    //         $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'>Trước</a>";
    //         $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>Tiếp</a>";
    //         // $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>Sau</a>";
    //     }
    //     // $links:
    //     for($i=$from; $i<=$to; $i++) {
    //         if($page == $i) {
    //             $links = $links . "<a style=\"padding:15px;margin:0 5px;text-decoration:underline;color:red;font-weight:bold;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
    //         }
    //         else
    //         {
    //             $links = $links . "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$i'>$i</a>";
    //         }
    //     }
    //     return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    // }



    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset)
    {
        $totalLinks = ceil($totalResults / $resultsPerPage);
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
            // $prevLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'><</a>";
            //  $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'><<</a>";
            $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$prev'>Trước</a>";
            // $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>Tiếp</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $firstLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=1'>Trước</a>";
            $nextLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$next'>Tiếp</a>";
            // $lastLink = "<a style=\"padding:15px;margin:0 5px;box-shadow: 5px 5px 8px #888888;border-radius:10%;\" href='$url" . "page=$totalLinks'>Sau</a>";
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
