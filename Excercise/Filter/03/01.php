<?php
$variable = "Nguyen Van A";

function convertString($string){
    $result = str_replace(" ","_",$string);
    return $result;
}

echo filter_var($variable,FILTER_CALLBACK,array('options'=>'convertString'));