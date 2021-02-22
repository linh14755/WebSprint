<meta charset="UTF-8">
<?php
require_once('C:\xampp\htdocs\test\Regular Expression\check_input\funtions.php');
$fileupload = $_FILES['file-upload'];

$flagsize =  checkSize($fileupload['size'], 100 * 1024, 5 * 1024 * 1024);

$flagExtension = checkExtension($fileupload['name'], array('jpg', 'png', 'mp3', 'zip', 'exe'));

if ($flagsize == true && $flagExtension == true) {
    move_uploaded_file($fileupload['tmp_name'], './files/' . random($fileupload['name']));
} else {
    echo 'Tải file không thành công';
}
