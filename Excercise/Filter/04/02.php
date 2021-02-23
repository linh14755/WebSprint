<meta charset="UTF-8">
<?php

$value = 'hinh.rar';

$options = array('options' => array('regexp' => '#\.(png|jpg|gif)#'));

if (filter_var($value, FILTER_VALIDATE_REGEXP, $options)) {
    echo $value.' - Là định dạng cho phép';
} else {
    echo $value.' - Không là định dạng cho phép';
}
