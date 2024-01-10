<?php
class Search_f extends Db
{
    public function search_custom($list1, $list2, $list3, $list4)
    {
        $arr = [];

        $new_list_1 = [];
        for ($i = 0; $i < 500; $i++) {
            $new_list_1 = array_merge($new_list_1, $list1);
        }
        $new_list_2 = [];
        for ($i = 0; $i < 300; $i++) {
            $new_list_2 = array_merge($new_list_2, $list2);
        }
        $new_list_3 = [];
        for ($i = 0; $i < 300; $i++) {
            $new_list_3 = array_merge($new_list_3, $list3);
        }
        $new_list_4 = [];
        for ($i = 0; $i < 200; $i++) {
            $new_list_4 = array_merge($new_list_4, $list4);
        }
        foreach ($new_list_1 as $key => $value) {
            $arr[] = ['name' => $value['chucvu'], 'type_job' => $value['type_job'], 'id' => $value['id_job']];
        }
        foreach ($new_list_2 as $key => $value) {
            $arr[] = ['name' => $value['chucvu'], 'type_job' => $value['type_job'], 'id' => $value['id_job']];
        }
        foreach ($new_list_3 as $key => $value) {
            $arr[] = ['name' => $value['chucvu'], 'type_job' => $value['type_job'], 'id' => $value['id_job']];
        }
        foreach ($new_list_4 as $key => $value) {
            $arr[] = ['name' => $value['chucvu'], 'type_job' => $value['type_job'], 'id' => $value['id_job']];
        }
        return $arr;
    }
    public static function slug($title)
    {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        );
        //Some URL was encode, decode first
        $title = urldecode($title);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $title));
    }
}
