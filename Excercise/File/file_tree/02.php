<meta charset="UTF-8">
<?php

$filename = 'files/text.txt';

if (file_exists($filename)) {

    $data = file($filename);

    unset($data[2]);
    echo '<pre>';
    print_r($data);
    echo '</pre>';
} else {
    echo 'Tập tin không tồn tại';
}
