<?php
$subject = "PHP PHP is easy";
$parttern = '/PHP/';
if (preg_match_all($parttern, $subject, $match) == true) {
    echo 'Tim thay';

    echo "<pre>";
    print_r($match[0]);
    echo "</per";
} else {
    echo 'Khong tim thay';
}
