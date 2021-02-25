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

        if (!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = parse_ini_file('user.ini');

            $userInfo = explode('|', $data[$username]);

            if ($userInfo[0] == $username && $userInfo[1] == md5($password)) {


                $_SESSION['fullname'] = $userInfo[2];
                $_SESSION['flagPermission'] = true;
                $_SESSION['timeout'] = time();

                echo '<h3>Xin chào: ' . $_SESSION['fullname'] . '</h3>';
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