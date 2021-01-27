<?php

$filename = 'files/file.txt';

$type    = filetype($filename);
$size = filesize($filename);

echo 'Dir Name: ' . dirname($filename) . '<br>';
echo 'File Name: ' . basename($filename, '.txt') . '<br>';
echo 'Base Name: ' . basename($filename) . '<br>';
echo 'Type: ' . $type . '<br>';
echo 'Size: ' . convertSize($size) . '<br>';
echo '<pre>';
print_r(pathinfo($filename));
echo '</pre>';


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
