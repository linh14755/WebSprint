<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnHuy').click(function() {
                window.location = 'index.php';
            });
        });
    </script>
</head>

<body>
    <?php
    require_once('function.php');

    $id  = $_GET['id'];

    $content = file_get_contents("./file/$id.txt");
    $content = explode('||', $content);

    $title = $content[0];
    $description = $content[1];

    //delete
    $flag = false;
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        @unlink("./file/$id.txt"); //thêm @ để trong quá trình xóa nó không báo lỗi
        $flag = true;
    }
    ?>
    <div class="wrapper">
        <div class="heading">DELETE FILE</div>
        <?php if ($flag == false) { ?>
            <div id="form">
                <form action="#" method="post">
                    <div class="row">
                        <p class="title">Tập tin:</p>
                        <span><?php echo realpath("./file/$id.txt"); ?></span>
                    </div>
                    <div class="row">
                        <p class="title">Tiêu đề:</p>
                        <span><?php echo $title ?></span>
                    </div>
                    <div class="row">
                        <p class="title">Mô tả:</p>
                        <span><?php echo $description ?></span>
                    </div>
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" value="Xóa">
                        <input type="button" value="Hủy" id="btnHuy">
                    </div>
                </form>
            <?php
        } else echo '<div class="title">Xóa thành công!</br> Click vào <a href="index.php">đây</a> để về trang chủ! </div>';
            ?>
            </div>
    </div>
</body>

</html>