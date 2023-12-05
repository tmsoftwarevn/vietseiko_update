<?php
class Nganh_ung_tuyen extends Db
{

    /* lấy dữ liệu từ bản Blog*/

    static function getAllNganh_ung_tuyen()
    {
        $sql = self::$connection->prepare("SELECT * FROM nganh_ung_tuyen");
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    /* lấy một bài viết dựa trên Id */
    public function createInformationUser_UngTuyen(
        $name,
        $gender,
        $email,
        $phone,
        $birthday,
        $job,
        $kinh_nghiem,
        $hoc_van,
        $address,
        $luong,
        $des_kn,
        $muc_tieu,
        $ghi_chu
    ) {
        $sql = self::$connection->prepare("INSERT INTO `infomation_ung_tuyen`(`name`, `gender`, `email`, `phone`, `ngay-sinh`, `job`, `kinh-nghiem`, `hoc-van`, `address`, `luong`, `des-kn`, `muctieu`, `ghi-chu`) 
        VALUES ('$name','$gender',' $email','$phone','$birthday','$job','$kinh_nghiem','$hoc_van','$address','$luong','$des_kn','$muc_tieu','$ghi_chu')");
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
