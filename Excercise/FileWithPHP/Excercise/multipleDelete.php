<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $flag = false;    

    if (isset($_POST['checkbox'])) {
        $checkbox = $_POST['checkbox'];
        foreach ($checkbox as $key => $value) {
            @unlink("./file/$value.txt");
        }
        $flag  = true;
    }else{
        ?>
        <div class="wrapper">
            <div class="heading">MUTIL DELETE FILE</div>
            <div class="title">Bạn chưa chọn tin để xóa!</br> Click vào <a href="index.php">đây</a> để về trang chủ! </div>
        </div>
        <?php
    }


    if ($flag == true) {
    ?>
        <div class="wrapper">
            <div class="heading">MUTIL DELETE FILE</div>
            <div class="title">Xóa thành công!</br> Click vào <a href="index.php">đây</a> để về trang chủ! </div>
        </div>
    <?php
    }
    ?>

</body>

</html>