<?php
class Cam_nang_f extends Db
{

    /* lấy dữ liệu từ bản Blog*/

    static function count_AllBlog_byId($type_id)
    {
        if ($type_id == 'all') {
            $sql = self::$connection->prepare("SELECT COUNT(*) AS count FROM cam_nang");
        } else {
            $sql = self::$connection->prepare("SELECT COUNT(*) AS count FROM cam_nang WHERE type_id = ?");
            $sql->bind_param('s', $type_id);
        }
        
        $sql->execute();
        $result = $sql->get_result();
        $count = $result->fetch_assoc()['count'];
        
        return $count;
    }
    // Lấy các bài viết mới nhất và phân trang
    static function getLatestBlogWithPagination_byid($page, $resultsPerPage,$type_id)
    {
        $offset = ($page - 1) * $resultsPerPage;

        if ($type_id == 'all') {
            $sql = self::$connection->prepare("SELECT * FROM cam_nang ORDER BY created_at DESC LIMIT ?, ?");
            $sql->bind_param('ii', $offset, $resultsPerPage);
        } else {
            $sql = self::$connection->prepare("SELECT * FROM cam_nang WHERE type_id = ? ORDER BY created_at DESC LIMIT ?, ?");
            $sql->bind_param('iii', $type_id, $offset, $resultsPerPage);
        }

        $sql->execute();

        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items;
    }
    //Lay chi tiet blog:
    function detail($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cam_nang  WHERE id_blog = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
   

    /* lấy các bài viết liên quan dự trên ngành nghề và hình thức.*/
    function getRelatedBlog($type_id, $limit)
    {
        $sql = self::$connection->prepare("SELECT * FROM cam_nang WHERE type_id = ? ORDER BY created_at desc LIMIT $limit");
        $sql->bind_param("i",$type_id);
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy ra các bài blog mới nhất:
     */
    static function getLatestBlog($numver_of_records)
    {
        $sql = self::$connection->prepare("SELECT * FROM cam_nang ORDER BY created_at DESC LIMIT $numver_of_records");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
