<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File</title>
    <link rel="stylesheet" href="style.css">

    <script src="js/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $('#multi-delete').click(function() {
                $('#main-form').submit();
            });
        });
    </script>
</head>

<body>

    <div class="wrapper">
        <div class="heading" style="font-size: 25px;">QUẢN LÝ TẬP TIN</div>
        <form action="multipleDelete.php" method="post" id="main-form">
            <?php
            require_once('function.php');
            $data = scandir('./file/');

            foreach ($data as $key => $value) {
                if ($value == '.' || $value == '..' || preg_match('#.txt$#imsU', $value) == false) continue;

                $content    = file_get_contents("./file/$value");
                $content = explode('||', $content);
                $title = $content[0];
                $description = $content[1];
                $id = substr($value, 0, 5);
                $size = convertSize(filesize("./file/$value"));
            ?>

                <div class="formindex">
                    <p class="check" id="border" style="width: 5%">

                        <input type="checkbox" name="checkbox[]" value="<?php echo $id; ?>">
                    </p>


                    <div id="border" style="width: 60%;">
                        <p class="title"><span><?php echo $title ?></span></p>
                        <p class="description"><span><?php echo $description ?></span></p>
                    </div>


                    <p class="id" id="border" style="width: 6%;"><?php echo $id ?></p>


                    <p class="size" id="border" style="width: 6%;"><?php echo $size ?></p>


                    <p class="action" id="border" style="width: 8%;">
                        <a href="edit.php?id=<?php echo $id ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $id ?>">Delete</a>
                    </p>
                </div>

            <?php
            }
            ?>
        </form>
        <p id="wrapper">
            <a href="add.php">Thêm Tin</a> |
            <a id="multi-delete" href="#">Xóa Tin Đã Chọn</a>
        </p>
    </div>

</body>

</html>