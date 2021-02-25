<?php
session_start();

if(isset($_SESSION['gae'])){
    echo 'Ton tai';
}else{
    echo 'chua ton tai';
}