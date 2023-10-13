<?php
class Hinhthuc extends Db
{
    /**
     * LẤY DỮ LIỆU BẢNG hinhthuc
     */
    //Lấy danh sách tất cả hinhthuc:
    static function getAllHinhThuc()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_hinhthuc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả hinhthuc và phân trang:
    static function getAllHinhThuc_andCreatePagination($page, $resultsPerPage)
    {
        $firstLink = ($page - 1) * $resultsPerPage;
        $sql = self::$connection->prepare("SELECT * FROM job_hinhthuc order by id_hinhthuc desc LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    /**
     * Laays name_hinhthuc cua job_hinhthuc theo id_hinhthuc:
     */
    static function getHinhthucNamw($id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM job_hinhthuc WHERE id_hinhthuc = ?");
        $sql->bind_param("i", $id_hinhthuc);
        $sql->execute();
        $hinhthuc = $sql->get_result()->fetch_assoc();
        return $hinhthuc['name_hinhthuc'];
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
