<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <title>Trắc nghiệm tính cách</title>
            <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<?php
    //doc file question
    $data = file('question.txt') or die("can not open file");

    $point = 0;

    array_shift($data);

    foreach ($data as $key => $value) {
        $tmpArr = explode('|', $value);
        $id       = $tmpArr[0];
        $point = $point + $_POST[$id];
}
    // echo "<pre>";
    //     print_r($point);
    // echo "</pre>";

    //doc result
    $data = file('result.txt') or die("can not open file");

    foreach ($data as $key => $value) {
        $tmp = explode("|", $value);
        $min = $tmp[0];
        $max = $tmp[1];
        $content = $tmp[2];
        if ($point >= $min && $point <= $max) {
            $result = $content;
        break;
        }
    }
?>
            <div class="content">
                        <h1>Kết quả trắc nghiệm tính cách</h1>
                        <p><b>Tổng số điểm của bạn là: <?php echo $point ?> </b></p><p style='margin-top: 10px; text-align: justify;'><b><?php echo $result ?></b></p>
            </div>
           
</body>
</html>