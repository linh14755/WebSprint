<?php
$number = 4;

function checkNumber($number)
{
    $flag = false;
    if ($number  % 2 == 0) $flag = true;

    return $flag;
}

if (filter_var($number, FILTER_CALLBACK, array('options' => 'checkNumber'))) {
    echo 'So chan';
} else {
    echo 'So le';
}
