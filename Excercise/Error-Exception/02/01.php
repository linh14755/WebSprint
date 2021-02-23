<?php

// error_reporting(E_ALL);

error_reporting(E_ALL ^ E_NOTICE);

foreach($data as $key => $value){
    $html .= $value;
}