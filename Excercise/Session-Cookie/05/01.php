<?php
session_start();
$_SESSION['course'] = 'PHP Programming';
$_SESSION['info'] = array(
    'teacher' => 'ZendVN',
    'time'=> 100 
);

echo $session = session_encode();

session_decode($session);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';