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
        // $curl = curl_init();
        // // Thiết lập các tùy chọn cho yêu cầu cURL
        // curl_setopt($curl, CURLOPT_URL, 'https://provinces.open-api.vn/api/'); // URL của API cần gửi yêu cầu đến
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Trả về kết quả thay vì in ra
        // // Thực thi yêu cầu cURL và lưu kết quả vào biến
        // $response = curl_exec($curl);
        // // Kiểm tra xem có lỗi xảy ra trong quá trình yêu cầu không
        // if ($response === false) {
        //     echo 'Lỗi cURL: ' . curl_error($curl);
        // }
        // curl_close($curl);

        // if ($response) {
        //     // Xử lý và hiển thị dữ liệu từ kết quả
        //     $data = json_decode($response, true); // Giả sử API trả về dữ liệu JSON
        //     $array_ = [];
        //     foreach ($data as $index => $item) {
        //         array_push($array_, $item['name']);
        //     }
        //     $t = var_dump($array_);
        //     //$t = $array_;
        //     //echo 'tinh custom' . $t;
        //     return $t;
        // } else {
        //     // Xử lý khi không nhận được kết quả từ API
        //     echo 'Không nhận được dữ liệu từ API';
        // }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://provinces.open-api.vn/api/');
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result, true);

        $array_ = [];
        foreach ($obj as $index => $item) {
            array_push($array_, $item['name']);
        }

        //echo 'tinh custom' . print_r($array_);
        return $array_;
        // foreach ($array_ as $index => $item) {
        //     echo 'checkkk' . $item;
        // }
    }
}
