<?php
session_start();

$_SESSION['name'] = 'Nguyen Van B';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
