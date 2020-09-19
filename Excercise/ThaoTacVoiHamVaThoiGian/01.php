<!-- Viết chương trình cho phép người dùng nhập vào một phân số, thực hiện tối giản phân số
và xuất ra kết quả. -->

<?php
    $ftractions = "52/6";

    $arrftractions = explode("/", $ftractions);

    $ts = $arrftractions[0];
    $ms = $arrftractions[1];

    // 1 - Lấy phân số
    // 2 - tối giản phân số   UCLN của tử số mà mẫu số
    // 3 - chia ts, ms cho UCLN
    // 4 - phân số mới
    
    // 2 - tối giản phân số   UCLN của tử số mà mẫu số
    //a % d == 0  --> d là ước của a, a là bội của d
    // 18 - 4 --> 2 là UCLN của 18 và 4
    
    //UCLN
    function UCLN ($n1, $n2) {
        for ($i = 1; $i <= $n1 ; $i++) { if ($n1 % $i == 0) { $uclnN1[] = $i; } }
        for ($i = 1; $i <= $n2 ; $i++) { if ($n2 % $i == 0) { $uclnN2[] = $i; } }

        $tmp = array_intersect($uclnN1, $uclnN2);
        $result = max($tmp);
        return $result;
    }

    $ucln =  UCLN($ts,$ms);
    $ts = $ts/$ucln;
    $ms = $ms/$ucln;

    echo $ts."/".$ms;
?>