<!-- Viết chương trình cho người dùng nhập ngày, tháng, năm; sau khi người dùng bấm nút
Submit, hệ thống sẽ thông báo “thời gian nhập vào” là hợp lệ hay không hợp lệ. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thao tác với ngày tháng</title>

    <style>
        * { margin: 0px; padding: 0px; }
        .content { margin: 20px auto; width: 600px;  border: 2px solid #ddd; padding: 10px; }
        .content h1 { text-align: center; color: #F00; margin-bottom: 10px; }
        .content div.row { margin-bottom: 10px; }
        .content div.row span { width: 100px; display: inline-block; }
        .content div.row select { width: 100px; }
        .content div.result span { margin: 10px 0px; display: inline-block; }
        .content div.row input[type=submit] { padding: 2px 10px; }
    </style>

</head>
<body>
<?php
    //tạo mảng từ 1 --> 31
    $arDays = range(1,31);
    $arMonths = range(1,12);
    $arYears = range(1970,2015);

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
    $days = isset($_POST["days-select"]) ? $_POST["days-select"] : 0;
    $months = isset($_POST["months-select"]) ? $_POST["months-select"] : 0;
    $years = isset($_POST["years-select"]) ? $_POST["years-select"] : 0;

    $strDays = createSelectbox($arDays, "days-select",$days);
    $strMonths = createSelectbox($arMonths, "months-select",$months);
    $strYears = createSelectbox($arYears, "years-select",$years);

?>
    <div class="content">
        <h1>Thao tác với thời gian</h1>
        <form action="#" method="POST">
            <div class="row">
                <span>Ngày</span>
                <?php echo $strDays ?>
            </div> <!--ngày -->
            <div class="row">
                <span>Tháng</span>
                <?php echo $strMonths ?>
            </div> <!--Tháng-->
                <div class="row">
                <span>Năm</span>
                <?php echo $strYears ?>
                </select> <!--Năm-->
            </div>
            <input type="submit" value="CHECK DATE">
            <div class="result">
                <?php
                    echo "Ngày được chọn: $arDays[$days]/$arMonths[$months]/$arYears[$years]";
                    if (checkdate($arDays[$days],$arMonths[$months],$arYears[$years])) {
                        echo "<p>Ngày hợp lệ</p>";
                    }else{
                        echo "<p>Ngày không hợp lệ</p>"; 
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>