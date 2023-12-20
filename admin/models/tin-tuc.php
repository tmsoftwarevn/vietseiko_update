<?php
require_once "db.php";
class Tin_tuc extends Db
{
    /**
     * LẤY DỮ LIỆU BẢNG JOB
     */
    //Lấy danh sách tất cả job
    static function getAll_Blog()
    {
        $sql = self::$connection->prepare("SELECT * FROM blog order by created_at desc");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lấy danh sách tất cả sản phẩm và phân trang:
    static function getAll_Blog_andCreatePagination($page, $resultsPerPage)
    {
        $firstLink = ($page - 1) * $resultsPerPage; 
        $sql = self::$connection->prepare("SELECT blog.*,protypes.type_name FROM blog INNER JOIN protypes ON blog.type_id = protypes.type_id order by blog.created_at desc LIMIT $firstLink, $resultsPerPage;");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy sản phẩm theo id:
     */
    public function getBlog_ByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM blog WHERE id_blog = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }

    //Lấy ra các tin tức cùng một type và phân trang:
    static function getBlog_ByType(
        $type_id,       
        $page,
        $resultPerPage
    ) {
        $firstLink = ($page - 1) * $resultPerPage;
        $sql = self::$connection
            ->prepare("SELECT * FROM blog WHERE type_id = ? LIMIT $firstLink, $resultPerPage");
        $sql->bind_param("i", $type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * XÓA JOB THEO id
     */
    static function deleteBlog_ByTypeID($id)
    {
        $sql = self::$connection->prepare("DELETE FROM blog WHERE id_blog = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }

    /**
     * Thêm mới JOB:
     */
    public function insertBlog($img_blog, $name, $noidung, $type)
    {
        $sql = self::$connection->prepare("INSERT INTO `blog`( `img_blog`, `tieude_blog`, `noidung_blog`, `type_id`) 
        VALUES ('$img_blog','$name','$noidung','$type')");
        return $sql->execute();
    }
    // update job
    static function updateBlog($id_blog,$img_blog, $name, $noidung, $type)
    {
        $sql = self::$connection->prepare("UPDATE `blog` SET `img_blog`='$img_blog',`tieude_blog`='$name',`noidung_blog`='$noidung',`type_id`='$type' where id_blog = $id_blog");

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
    //(SEARCHING + Paging/Pagination) Tìm kiếm job và Phân trang:
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
