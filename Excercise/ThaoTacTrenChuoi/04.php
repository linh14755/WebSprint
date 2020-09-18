<!-- Viết chương trình đọc số đọc số có 12 chữ số
. -->
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

            $dictionaryNumber = array (
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
            
                $dictionaryUnit = array(
                    0 => "tỷ",
                    1 => "triệu",
                    2 => "nghìn",
                    3 => "đồng"
                );
    function readnumber3Digit($number, $dictionaryNumber, $readfull = false) {

        //chuyển number thành chuỗi
        $number = strval($number);
        $number = str_pad($number, 3, 0, STR_PAD_LEFT);

        //lấy chữ số ở hàng trăm, hang chục, hàng đơn vị
        $digit_0 = substr($number, 2, 1); //hàng đơn vị lấy giá trị $number, tại vị trí 2, lấy 1 chữ số
        $digit_00 = substr($number, 1, 1); //hàng chục lấy giá trị $number, tại vị trí 1, lấy 1 chữ số
        $digit_000 = substr($number, 0, 1); //hàng trăm lấy giá trị $number, tại vị trí 0, lấy 1 chữ số
        //hàng trăm
        $str_000 = $dictionaryNumber[$digit_000]." trăm ";
        //hàng chục
        // 0: linh  1: mười
        $str_00 = $dictionaryNumber[$digit_00]." mươi ";
        if ($digit_00 == 0) { $str_00 = " linh "; }
        if ($digit_00 == 1) { $str_00 = " mười "; }
        //hàng đơn vị
        // 1: mốt khi $digit_00(hàng chục) > 1
        // 5: lăm khi $digit_00(hàng chục) > 0
        $str_0 = $dictionaryNumber[$digit_0];
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

    function format ($str,$type = null) {
        //đưa tất cả kí tự về chữ thường
        $str = strtolower($str);
        //loại bỏ khoảng trắng đầu và cuối
        $str = trim($str);
        //loại bỏ khoảng trắng dư thừa giữ các chữ
        $array = explode(" ",$str);
        foreach ($array as $key => $value) {
            if (trim($value) == null) {
                unset($array[$key]);
            }
            if ($type == "danh-tu") {
                $array[$key] = ucfirst($value);
            }
        }
        $result = implode(" ",$array);
        // làm cho kí tự đầu tiên của chuỗi in hoa
        $result = ucfirst($result);
        return $result;
        
    }

    function readNumber12Digits ($number, $dictionaryNumber, $dictionaryUnit){
        //1620: 000 tỉ 000 triệu 001 nghìn 620 đồng
        $number = strval($number); //hàm chuyển đổi giá trị sang kiểu chuỗi
        $number = str_pad($number, 12, 0, STR_PAD_LEFT); //gắn thêm 0000 000 vào chuỗi
        
        $arrayNumbers = str_split($number, 3); //chuyển từ chuỗi sang mảng

        foreach ($arrayNumbers as $key => $value) {
            if ($value != "000") {
                $index = $key;
            break;
            }
        }

        foreach ($arrayNumbers as $key => $value) {
            if ($key >= $index) {
                $readfull = true;
                if ($key == $index) $readfull = false;
                $result[$key] = readnumber3Digit($value,$dictionaryNumber,$readfull)."  ".$dictionaryUnit[$key];
            }
        }
    
        $result = implode(" ",$result);
        $result = format($result);
        $result = str_replace('không đồng', 'đồng', $result);
        $result = str_replace('không trăm đồng', 'đồng', $result);
        $result = str_replace('không nghìn đồng', 'đồng', $result);
        $result = str_replace('không trăm nghìn đồng', 'đồng', $result);
        $result = str_replace('không triệu đồng', 'đồng', $result);
        $result = str_replace('không trăm triệu đồng', 'đồng', $result);
        $result = str_replace('không tỷ triệu đồng', 'đồng', $result);

        return $result;
    }

    $number = 990000000000;
    
    $result = readNumber12Digits($number, $dictionaryNumber, $dictionaryUnit);
        echo "Input: " .$number."</br>";
        echo "Output: ".$result;

        // echo "<pre>";
        //     print_r($result);
        // echo "</pre>";
?>