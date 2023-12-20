<?php
class Blog_f extends Db
{

    /* lấy dữ liệu từ bản Blog*/

    static function getAllBlog()
    {
        $sql = self::$connection->prepare("SELECT * FROM blog");
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    // Lấy các bài viết mới nhất và phân trang
    static function getLatestBlogWithPagination($page, $resultsPerPage)
    {
        $offset = ($page - 1) * $resultsPerPage;

        $sql = self::$connection->prepare("SELECT * FROM blog ORDER BY created_at DESC LIMIT ?, ?");
        $sql->bind_param("ii", $offset, $resultsPerPage);
        $sql->execute();

        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items;
    }

    // phân trang 
    static function getTotalBlogCount()
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) as count FROM blog");
        $sql->execute();

        $result = $sql->get_result();
        $row = $result->fetch_assoc();

        return $row['count'];
    }

    /* lấy một bài viết dựa trên Id */
    static function getBlogByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM blog WHERE id_blog = ?");
        $sql->bind_param("i", $id);
        $sql->execute();

        if ($sql->execute()) {
            $result = $sql->get_result();
            $row = $result->fetch_assoc();
            return $row;
        } else {
            // Xử lý lỗi nếu cần
            return null;
        }
    }

    /* lấy các bài viết liên quan dự trên ngành nghề và hình thức.*/
    function getRelatedBlog($id_nganhnghe, $id_hinhthuc)
    {
        $sql = self::$connection->prepare("SELECT * FROM blog WHERE id_nganhnghe = ? AND id_hinhthuc = ?");
        $sql->bind_param("ii", $id_nganhnghe, $id_hinhthuc);
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /**
     * Lấy ra các bài blog mới nhất:
     */
    static function getLatestBlog($numver_of_records)
    {
        $sql = self::$connection->prepare("SELECT * FROM blog ORDER BY created_at DESC LIMIT $numver_of_records");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Lay chi tiet blog:
    function detail($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM blog  WHERE id_blog = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}