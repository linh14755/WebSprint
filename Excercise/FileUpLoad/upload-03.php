<meta charset="UTF-8">
<?php
require_once('C:\xampp\htdocs\test\Regular Expression\check_input\funtions.php');

$fileupload = $_FILES['file-upload'];
$config = parse_ini_file('config.ini');


foreach ($fileupload['name'] as $key => $value) {
    if ($value != null) {
        echo $flagsize =  checkSize($fileupload['size'][$key], $config['min_size'], $config['max_size']);

        echo $flagExtension = checkExtension($value, explode("|", $config['extension']));

        if ($flagsize == true && $flagExtension == true) {
            @move_uploaded_file($fileupload['tmp_name'][$key], './files/' . random($fileupload['name'][$key]));
            echo 'Succes';
        }
    }
}
