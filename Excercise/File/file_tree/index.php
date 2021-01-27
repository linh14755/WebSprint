<?php
$data = scandir('.');


$result  = '<ul>';
foreach ($data as $key => $value) {
    if ($value != '.' && $value != '..') {
        if (is_dir("./$value")) {
            $result .= '<li>D: ' . $value . '<ul>';

            $dataChild = scandir("./$value");
            foreach ($dataChild as $keyC => $valueC) {
                if ($valueC != '.' && $valueC != '..') {
                    if (is_dir("./$value/$valueC")) {
                        $result .= '<li>D: ' . $valueC . '</li>';
                    } else {
                        $result .= '<li>F: ' . $valueC . '</li>';
                    }
                }
            }
            $result .= '</ul></li>';
        } else {
            $result .= '<li>F: ' . $value . '</li>';
        }
    }
}
$result .= '</ul>';

echo $result;


// echo '<pre>';
// print_r($data);
// echo '</pre>';   