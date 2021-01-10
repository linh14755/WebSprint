<?php
$subject = "PHP is easy";
$parttern = '/PHP/';
if (preg_match($parttern, $subject, $match) == true) {
    echo 'Tim thay';

    echo "<pre>";
    print_r($match);
    echo "</per";
} else {
    echo 'Khong tim thay';
}
