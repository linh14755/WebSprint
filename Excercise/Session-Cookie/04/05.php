<?php

session_start();
$image = 'img.jpg';

if(file_exists($image)){
    echo 'file exists';
    $_SESSION['image']['info'] = getimagesize($image);
    $_SESSION['image']['data'] = file_get_contents($image);

}

echo '<pre>'; print_r($_SESSION); echo '</pre>';