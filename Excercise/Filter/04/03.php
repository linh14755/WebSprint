<meta charset="UTF-8">
<?php

$value = 'hinh.rar';

$options = array('options' => array('regexp' => '#^[a-zA-Z0-9]+$#')); // '+' không cho phép kí tự khoảng trắng

if (filter_var($value, FILTER_VALIDATE_REGEXP, $options)) {
    echo $value.' - Là định dạng cho phép';
} else {
    echo $value.' - Không là định dạng cho phép';
}
