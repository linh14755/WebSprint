<!-- Viết chương trình đọc số gồm ba chữ số. -->
<meta charset="utf-8">
<?php

    /*
            * 100 một trăm
            * 101 một trăm linh một
            * 111 một trăm mười một
            * 121 một trăm hai mươi mốt
            * 105 một trăm linh năm
            * 115 một trăm mười lăm
            * 145 một trăm bốn mươi lăm
            */        

            $arrayNumber = array (
                0 => 'không',
                1 => 'một',
                2 => 'hai',
                3 => 'ba',
                4 => 'bốn',
                5 => 'năm',
                6 => 'sáu',
                7 => 'bảy',
                8 => 'tám',
                9 => 'chín',
                );

    function readnumber3Digit($number, $arrayNumber, $readfull = false) {

        //chuyển number thành chuỗi
        $number = strval($number);
        $number = str_pad($number, 3, 0, STR_PAD_LEFT);

        //lấy chữ số ở hàng trăm, hang chục, hàng đơn vị
        $digit_0 = substr($number, 2, 1); //hàng đơn vị lấy giá trị $number, tại vị trí 2, lấy 1 chữ số
        $digit_00 = substr($number, 1, 1); //hàng chục lấy giá trị $number, tại vị trí 1, lấy 1 chữ số
        $digit_000 = substr($number, 0, 1); //hàng trăm lấy giá trị $number, tại vị trí 0, lấy 1 chữ số
        //hàng trăm
        $str_000 = $arrayNumber[$digit_000]." trăm ";
        //hàng chục
        // 0: linh  1: mười
        $str_00 = $arrayNumber[$digit_00]." mươi ";
        if ($digit_00 == 0) { $str_00 = " linh "; }
        if ($digit_00 == 1) { $str_00 = " mười "; }
        //hàng đơn vị
        // 1: mốt khi $digit_00(hàng chục) > 1
        // 5: lăm khi $digit_00(hàng chục) > 0
        $str_0 = $arrayNumber[$digit_0];
        if ($digit_00 > 1 && $digit_0 == 1) { $str_0 = " mốt "; }
        if ($digit_00 >= 1 && $digit_0 == 5) { $str_0 = " lăm "; }
        if($digit_00 > 1 && $digit_0 == 0) { $str_0 = ' '; }

        //nếu chữ số hàng chục và hàng đơn vị  bằng 0 
        if ($digit_00 == 0 && $digit_0 == 0) { $str_0 = ""; $str_00 = ""; }

        if ($readfull == false) {
            if ($digit_000 == 0) { $str_000 = ""; }
            if($digit_000 == 0 && $digit_00 == 0) { $str_00 = ''; }
        }

        $result = $str_000.$str_00.$str_0;
        return $result; 
    }
    // if (is_int($number)) {
    //     if ($number >= 100 && $number <= 999 ) {
            
    //     }else {
    //         $result = "Giá trị nhập vào phải là số có 3 chữ số";
    //     }
    // }else {
    //     $result = "Giá trị nhập vào phải là số";
    // }
    $number = 1;
        $result = readnumber3Digit($number,$arrayNumber, false);
        echo "Input: " .$number."</br>";
        echo "Output: ".$result;
?>