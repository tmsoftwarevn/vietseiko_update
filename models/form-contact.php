<?php
class Form_contact extends Db
{


    static function getAllNganh_ung_tuyen()
    {
        $sql = self::$connection->prepare("SELECT * FROM job_nganhnghe");
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    // ung vien
    public function createInformationUser_lienhe(
        $name,
        $email,
        $phone,
        $luong,
        $type,
        $nganhnghe,
        $address,
        $address_h,
        $file
    ) {
        $sql = self::$connection->prepare("INSERT INTO `contact`(`name`, `email`, `phone`, `muc_luong`, `khu_vuc_hien_tai`, `khu_vuc_mong_muon`, `nganhnghe`, `type_id`, `file`)
        VALUES ('$name','$email','$phone','$luong','$address','$address_h','$nganhnghe','$type','$file')");
        $sql->execute();

    }
    // nha tuyen dung
    public function create_info_ntd(
        $name,
        $email,
        $phone,
        $mucdich,
        $vitri,
        $address,
        $file,
        $type_id
    ) {
        $sql = self::$connection->prepare("INSERT INTO `contact_ntd&khac`(`name`, `email`, `phone`, `muc_dich`, `dia_diem`, `vi_tri_can_tuyen`, `file`, `type_id`) 
        VALUES ('$name','$email','$phone','$mucdich','$address','$vitri','$file','$type_id')");
        $sql->execute();

    }
    // khác
    public function create_info_khac(
        $name,
        $email,
        $phone,
        $mucdich,
        $file,
        $type_id
    ) {
        $sql = self::$connection->prepare("INSERT INTO `contact_ntd&khac`(`name`, `email`, `phone`, `muc_dich`, `file`, `type_id`) 
        VALUES ('$name','$email','$phone','$mucdich','$file','$type_id')");
        $sql->execute();

    }
    // fet api and custom 
    public function fetch_tinh_thanh()
    {
        // bỏ từ 'tỉnh','thành phố'
        function cutPrefix($name)
        {
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
            array_push($array_,  cutPrefix($item['name']));
        }
        echo print_r($array_);
        return $array_;
    }

    public function list_tinh()
    {
        $locations = array(
            'Hà Nội', 'Hà Giang', 'Cao Bằng', 'Bắc Kạn', 'Tuyên Quang', 'Lào Cai', 'Điện Biên', 'Lai Châu', 'Sơn La', 'Yên Bái',
            'Hoà Bình', 'Thái Nguyên', 'Lạng Sơn', 'Quảng Ninh', 'Bắc Giang', 'Phú Thọ', 'Vĩnh Phúc', 'Bắc Ninh', 'Hải Dương',
            'Hải Phòng', 'Hưng Yên', 'Thái Bình', 'Hà Nam', 'Nam Định', 'Ninh Bình', 'Thanh Hóa', 'Nghệ An', 'Hà Tĩnh',
            'Quảng Bình', 'Quảng Trị', 'Thừa Thiên Huế', 'Đà Nẵng', 'Quảng Nam', 'Quảng Ngãi', 'Bình Định', 'Phú Yên',
            'Khánh Hòa', 'Ninh Thuận', 'Bình Thuận', 'Kon Tum', 'Gia Lai', 'Đắk Lắk', 'Đắk Nông', 'Lâm Đồng', 'Bình Phước',
            'Tây Ninh', 'Bình Dương', 'Đồng Nai', 'Bà Rịa - Vũng Tàu', 'Hồ Chí Minh', 'Long An', 'Tiền Giang', 'Bến Tre',
            'Trà Vinh', 'Vĩnh Long', 'Đồng Tháp', 'An Giang', 'Kiên Giang', 'Cần Thơ', 'Hậu Giang', 'Sóc Trăng', 'Bạc Liêu', 'Cà Mau'
        );
        return $locations;
    }
    public function list_nhatban_location()
    {
        $locationsJapan = array(
            'Hokkaido', 'Aomori', 'Iwate', 'Miyagi', 'Akita', 'Yamagata', 'Fukushima',
            'Ibaraki', 'Tochigi', 'Gunma', 'Saitama', 'Chiba', 'Tokyo', 'Kanagawa',
            'Niigata', 'Toyama', 'Ishikawa', 'Fukui', 'Yamanashi', 'Nagano',
            'Gifu', 'Shizuoka', 'Aichi', 'Mie', 'Shiga', 'Kyoto', 'Osaka', 'Hyogo', 'Nara', 'Wakayama',
            'Tottori', 'Shimane', 'Okayama', 'Hiroshima', 'Yamaguchi',
            'Tokushima', 'Kagawa', 'Ehime', 'Kochi',
            'Fukuoka', 'Saga', 'Nagasaki', 'Kumamoto', 'Oita', 'Miyazaki', 'Kagoshima',
            'Okinawa'
        );
        return $locationsJapan;
    }
}
