<meta charset="UTF-8">
<?php
require_once('C:\xampp\htdocs\test\Regular Expression\check_input\funtions.php');
$fileupload = $_FILES['file-upload'];

$config = parse_ini_file('config.ini');


$flagsize =  checkSize($fileupload['size'], $config['min_size'], $config['max_size']);

$flagExtension = checkExtension($fileupload['name'], explode("|", $config['extension']));

if ($flagsize == true && $flagExtension == true) {
    @move_uploaded_file($fileupload['tmp_name'], './files/' . random($fileupload['name']));
} else {
    echo 'Tải file không thành công';
}
