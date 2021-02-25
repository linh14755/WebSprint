<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('function.php');

    if (isset($_COOKIE['fullname']) && $_COOKIE['fullname'] != null) {

        echo '<h3>Xin chào: ' . $_COOKIE['fullname'] . '</h3>';
        echo '<a href = "logout.php">Logout</a>';
    } else {

        if (!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = parse_ini_file('user.ini');

            $userInfo = explode('|', $data[$username]);

            if ($userInfo[0] == $username && $userInfo[1] == md5($password)) {

                setcookie('fullname', $userInfo[2], time() + 20);

                echo '<h3>Xin chào: ' . $userInfo[2] . '</h3>';
                echo '<a href = "logout.php">Logout</a>';
            } else {
                header('location: login.php');
            }
        } else {
            header('location: login.php');
        }
    }
    ?>
</body>

</html>