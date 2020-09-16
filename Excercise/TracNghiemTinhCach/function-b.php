<?php
    $data = file('option.txt') or die("Can not read file!");
    array_shift($data);
    $arrayoption = array();

    foreach ($data as $key => $value) {
        $tmp = explode("|","$value");    
        $questionID = $tmp[0];
        $optionID = $tmp[1];
        $option = $tmp[2];
        $point = $tmp[3];
        $arrayoption[$questionID][$optionID]["option"] = $option;
        $arrayoption[$questionID][$optionID]["point"] = $point;
    }
?>