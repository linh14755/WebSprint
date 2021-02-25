<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_COOKIE['fullname']) && $_COOKIE['fullname'] != null) {

        echo '<h3>Xin chào: ' . $_COOKIE['fullname'] . '</h3>';
        echo '<a href = "logout.php">Logout</a>';
    } else {
    ?>
        <div class="wrapper">
            <div class="heading">LOGIN</div>
            <div id="form" style="height: 310px;">
                <form action="process.php" method="post">
                    <div class="row">
                        <p class="title">Username</p>
                        <input type="text" name="username">
                    </div>
                    <div class="row">
                        <p class="title">Password</p>
                        <input type="password" name="password">
                    </div>
                    <div class="row">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
<?php
    }

?>