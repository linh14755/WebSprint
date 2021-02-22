<?php


$fileupload = $_FILES['file-upload'];

//Tạo ID file tự dộng
function randomString($length = 5)
{
    $arrchar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $arrchar = implode('', $arrchar);

    //trộn chuỗi
    $arrchar = str_shuffle($arrchar);

    $result = substr($arrchar, 0, $length);

    return $result;
}

if ($fileupload['name'] != null) {
    $filename = $fileupload['tmp_name'];
    $random = randomString();
    $destination = './files/' . $random . $fileupload['name'];
    // move_uploaded_file($filename,$destination);
    if (copy($filename, $destination)) {
        echo 'Sucess';
    }
}
