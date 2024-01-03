<?php
class Form_contact extends Db
{

    /* lấy dữ liệu từ bản Blog*/

    static function getAllNganh_ung_tuyen()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_nganhnghe");
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /* lấy một bài viết dựa trên Id */
    public function createInformationUser_lienhe(
        $name,
        $email,
        $phone,
        $luong,
        $type,  
        $nganhnghe,
        $address,
        $address_h
    ) {
        $sql = self::$connection->prepare("INSERT INTO `contact`(`name`, `email`, `phone`, `muc_luong`, `khu_vuc_hien_tai`, `khu_vuc_mong_muon`, `nganhnghe`, `type_id`)
        VALUES ('$name','$email','$phone','$luong','$address','$address_h','$nganhnghe','$type')");
        $sql->execute();

        // echo ("checkkk" . $sql);
    }
    public function fetch_tinh_thanh()
    {
        function cutPrefix($name) {
            $prefixes = ['Tỉnh', 'Thành phố'];
        
            foreach ($prefixes as $prefix) {
                $name = preg_replace("/^$prefix\s+/i", '', $name);
            }
        
            return trim($name);
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://provinces.open-api.vn/api/');
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result, true);

        $array_ = [];
        foreach ($obj as $index => $item) {
            //array_push($array_, $item['name']);
           
            array_push($array_,  cutPrefix($item['name']));
        }

        //echo 'tinh custom' . print_r($array_);
        return $array_;
        // foreach ($array_ as $index => $item) {
        //     echo 'checkkk' . $item;
        // }
    }
}
