<?php
$filename = 'files/text.txt';
$data = 'This is new text 3';
file_put_contents($filename,$data,FILE_APPEND);//FILE_APPEND ghi $data mới vào cuối tập tin