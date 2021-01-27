<meta charset="UTF-8">
<?php

$filename = 'files/file.txt';

$record = file($filename);

$data = file_get_contents($filename);

preg_match_all('#\S#imsU', $data, $matches);


echo '<ul>';
echo '<li>Tổng số dòng: ' . count($record) . '</li>';
echo '<li>Tổng số từ : ' . str_word_count($data) . '</li>';
echo '<li>Tổng số khoảng trắng : ' . substr_count($data, ' ') . '</li>';
echo '<li>Tổng số kí tự (không space) : ' . count($matches[0]) . '</li>';
echo '</ul>';
