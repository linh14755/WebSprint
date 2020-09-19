<?php

function createSelectbox ($arrData, $name, $keySelect) {
    $strDay = "";
    if (!empty($arrData)) {
        $strDay = '<select name="'.$name.'">';
        for ($i=0; $i < count($arrData) ; $i++) {
            if ($keySelect == $i) {
                $strDay .= '<option value="'.$i.'" selected="true">'.$arrData[$i].'</option>';
            }else{
                $strDay .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
            }
            
        }
        $strDay .= '</select>';
    }  
    return $strDay;
}

function addTime ($date, $format, $type, $value) {
    $arrDate = date_parse_from_format($format, $date);
    // echo "<pre>";
    //     print_r($arrDate);
    // echo "</pre>";
    $type = strtolower($type);
    switch ($type) {
        case 'day':
           $ts = mktime(0, 0, 0, $arrDate['month'], $arrDate['day'] + $value, $arrDate['year']);
            break;
        case 'month':
            $ts = mktime(0, 0, 0, $arrDate['month'] + $value, $arrDate['day'], $arrDate['year']);
            break;
        case 'year':
            $ts = mktime(0, 0, 0, $arrDate['month'], $arrDate['day'], $arrDate['year'] + $value);
            break;
        
        default:
            # code...
            break;
    }
    $result = date($format,$ts);
    return $result;
}

?>