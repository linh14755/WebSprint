<?php

$value = '084-08-38.234561';

$options = array('options' => array('regexp' => '#^084-[0-9]{2}-[0-9]{2}.[0-9]{6}$#'));

if (filter_var($value, FILTER_VALIDATE_REGEXP, $options)) {
    echo $value.' - Thoa man';
} else {
    echo $value.' - Khong thoa';
}
