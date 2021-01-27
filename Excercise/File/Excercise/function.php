<?php

// Kiểm tra dữ liệu khác rỗng
function checkEmpty($value)
{
    $flag = false;
    if (!isset($value) || trim($value) == "") {
        $flag = true;
    }
    return  $flag;
}

// Kiểm tra chiều dài dữ liệu
function checkLength($value, $min, $max)
{
    $flag = false;

    $length = strlen($value);
    if ($length < $min || $length > $max) {
        $flag = true;
    }

    return  $flag;
}
//Tạo ID file tự dộng
function randomString($length = 5)
{
    $arrchar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $arrchar = implode('',$arrchar);

    //trộn chuỗi
    $arrchar = str_shuffle($arrchar);

    $result = substr($arrchar, 0, $length);

    return $result;
}

//
function convertSize($size)
{
    $unit = array('B', 'KB', 'MB', 'GB', 'TB');

    for ($i = 0; $i < count($unit); $i++) {
        if ($size > 1024) {
            $size = $size / 1024;
        } else {
            $unit = $unit[$i];
            break;
        }
    }
    $size = round($size, 2);
    return $size . ' ' . $unit;
}

