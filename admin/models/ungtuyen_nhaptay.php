<?php

class Ungtuyen_nhaptay extends Db
{
    // đếm tổng
    static function getAll_cv($type_id, $start_date, $end_date)
    {
        if (!empty($start_date) && !empty($end_date)) {
            $sql = self::$connection->prepare("SELECT * from ung_tuyen_nhaptay  WHERE type_id = ? AND created_at BETWEEN ? AND ?");
            $sql->bind_param("iss", $type_id, $start_date, $end_date);
            $sql->execute();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        } else {
            $sql = self::$connection->prepare("SELECT * from ung_tuyen_nhaptay  WHERE type_id = ? ");
            $sql->bind_param("i", $type_id);
            $sql->execute();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
    }
    // detail
    static function get_detail_ungtuyen($id)
    {
        $sql = self::$connection->prepare("SELECT * from ung_tuyen_nhaptay  WHERE id_ungtuyen = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }
    // insert dùng chung 3 job, qua id
    public function insert_apply($name, $email, $phone, $namsinh, $mucluong, $khuvuc, $vi_tri, $link_cv, $type_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `ung_tuyen_nhaptay`(`name`, `email`, `phone`, `nam_sinh`, `muc_luong`, `khu_vuc`, `vi_tri_ung_tuyen`, `link_cv`, `type_id`) 
        VALUES ('$name','$email','$phone','$namsinh','$mucluong','$khuvuc','$vi_tri','$link_cv',' $type_id')");
        return $sql->execute();
    }
    public function update($id, $name, $email, $phone, $namsinh, $mucluong, $khuvuc, $vi_tri, $link_cv)
    {
        $sql = self::$connection->prepare("UPDATE `ung_tuyen_nhaptay` SET `name`='$name',`email`='$email',`phone`='$phone',`nam_sinh`='$namsinh',`muc_luong`='$mucluong',
        `khu_vuc`='$khuvuc',`vi_tri_ung_tuyen`='$vi_tri',`link_cv`='$link_cv' WHERE id_ungtuyen = $id");
        return $sql->execute();
    }
    //  3 job

    static function getAll_CV_andCreatePagination($page, $resultsPerPage, $type_id, $start_date, $end_date)
    {
        // phan trâng theo ngay
        if (!empty($start_date) && !empty($end_date)) {
            $firstLink = ($page - 1) * $resultsPerPage;
            $sql = self::$connection->prepare("SELECT * from `ung_tuyen_nhaptay` where type_id = ? AND created_at BETWEEN ? AND ? order by created_at desc LIMIT $firstLink, $resultsPerPage; ");
            $sql->bind_param("iss", $type_id, $start_date, $end_date);
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        } else {
            $firstLink = ($page - 1) * $resultsPerPage;
            $sql = self::$connection->prepare("SELECT * from `ung_tuyen_nhaptay` where type_id = ? order by created_at desc LIMIT $firstLink, $resultsPerPage; ");
            $sql->bind_param("i", $type_id);
            $sql->execute();
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
    }
    static function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM ung_tuyen_nhaptay WHERE id_ungtuyen = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
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
