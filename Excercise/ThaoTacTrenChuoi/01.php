<!-- Bài tập lấy thông tin từ url -->
<?php

    $url = "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
    
    // url: 06_BienTham_TinhYeu_LyMaiTrang.wma
    //     ID: 06
    //     Name: BienTham
    //     Album: TinhYeu
    //     Singer: LyMaiTrang
    //     Type: wma

    function getinfo01 ($url) {
        $info = explode("/",$url);
        $result = $info[7];
        return $result;
    }
    
    $arrresult = array();
    $info = getinfo01($url);
    $arrinfo = explode("_",$info);
 
    //$arrinfo[3] = LyMaiTrang.wma phải tách ra thành 2 chuỗi
    $info3 = explode(".",$arrinfo[3]);
    // $info3[0] = LyMaiTrang
    // $info3[1] = wma

    function format ($str) {
        $result = $str[0];
        for ($i = 1; $i < strlen($str); $i++) { 
            if (ctype_upper($str[$i]) == true) {
                $result .= " ".$str[$i];
            }else {
                $result .= $str[$i];
            }
        }
        return $result;
    }

    // $arrresult["ID"] = $arrinfo[0];  //06
    // $arrresult["Name"] = $arrinfo[1]; //BienTham
    // $arrresult["Album"] = $arrinfo[2]; //TinhYeu
    // $arrresult["Singer"] = $info3[0]; //LyMaiTrang
    // $arrresult["Type"] = $info3[1]; //wma
        
    $arrresult["ID"] = format($arrinfo[0]);  //06
    $arrresult["Name"] = format($arrinfo[1]); //BienTham
    $arrresult["Album"] = format($arrinfo[2]); //TinhYeu
    $arrresult["Singer"] = format($info3[0]); //LyMaiTrang
    $arrresult["Type"] = format($info3[1]); //wma

    echo "<pre>";
    print_r($arrresult);
    echo "</pre>";
?>


        
