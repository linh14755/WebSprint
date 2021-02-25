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
    if (isset($_SESSION['flagPermission']) && $_SESSION['flagPermission'] == true) {

        if (($_SESSION['timeout'] + 20) > time()) {

            echo '<h3>Xin chào: ' . $_SESSION['fullname'] . '</h3>';
            echo '<a href = "logout.php">Logout</a>';
        } else {
            session_unset();
            header('location: login.php');
        }
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