<!-- Chuẩn hóa chuỗi -->
<?php
    $str = " nguyen   VAn  An";

    function format ($str,$type = null) {
        //đưa tất cả kí tự về chữ thường
        $str = strtolower($str);

        //loại bỏ khoảng trắng đầu và cuối
        $str = trim($str);

        //loại bỏ khoảng trắng dư thừa giữ các chữ
        $array = explode(" ",$str);
            //     Array
            // (
            //     [0] => nguyen
            //     [1] => 
            //     [2] => 
            //     [3] => van
            //     [4] => 
            //     [5] => an
            // )

        foreach ($array as $key => $value) {
            if (trim($value) == null) {
                unset($array[$key]);
            }
            //     Array
                // (
                //     [0] => nguyen
                //     [3] => van
                //     [5] => an
                // )
            if ($type == "danh-tu") {
                $array[$key] = ucfirst($value);
            }
        }
                


        $result = implode(" ",$array);
        // làm cho kí tự đầu tiên của chuỗi in hoa
        $result = ucfirst($result);
        return $result;
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
    }
    
    echo format($str,"danh-tu");
    echo "</br>".format($str,"khong-phai-danh-tu");
    
?>