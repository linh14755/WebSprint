<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Regular Expresstion</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 100;
        font-size: 12px;
        line-height: 30px;
        color: #777;
        background: #4CAF50;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
    }

    #contact {
        margin: 150px 0;
        padding: 25px;
        background: #F9F9F9;
        box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact input[type="text"],
    #contact input[type="password"] {
        font: 400 12px/16px Helvetica, Arial, sans-serif;
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        display: block;
        font-size: 13px;
        font-weight: 400;
        margin: 5px 0 15px;
    }

    fieldset {
        border: none;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="password"] {
        width: 100%;
        border: 1px solid #ccc;
        background: #fff;
        margin: 0 0 5px;
        padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="password"]:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact input[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #fff;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact input[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    .error {
        color: red;
        font-style: italic;
    }
</style>

<body>
    <?php
    require_once 'funtions.php';
    $error = array();
    $error['email'] = null;
    $error['username'] = null;
    $error['password'] = null;
    $error['website'] = null;

    $email = null;
    $username = null;
    $password = null;
    $website = null;
    if (!empty($_POST)) {

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $website = $_POST['website'];


        if (check_input($email) == false) {
            $error['email'] = "Giá trị không hợp lệ";
            $email = null;
        }

        if (check_input($username, 'username') == false) {
            $error['username'] = "Giá trị không hợp lệ";
            $username = null;
        }

        if (check_input($password, 'password') == false) {
            $error['password'] = "Giá trị không hợp lệ";
            $password = null;
        }

        if (check_input($website, 'website') == false) {
            $error['website'] = "Giá trị không hợp lệ";
            $website = null;
        }
    }
    $strEmail = createInput('text', 'email', 'email...', '' . $email . '', '' . $error['email'] . '');
    $strUsername = createInput('text', 'username', 'username...', '' . $username . '', '' . $error['username'] . '');
    $strPassword = createInput('password', 'password', 'password...', '' . $password . '', '' . $error['password'] . '');
    $strWebsite = createInput('text', 'website', 'website...', '' . $website . '', '' . $error['website'] . '');
    ?>
    <div class="container">
        <form id="contact" action="#" method="post">
            <h3>Liên hệ</h3>
            <h4>Thông tin để liên hệ với chúng tôi</h4>
            <fieldset>
                <?php echo $strEmail; ?>
            </fieldset>
            <fieldset>
                <?php echo $strUsername; ?>
            </fieldset>
            <fieldset>
                <?php echo $strPassword; ?>
            </fieldset>
            <fieldset>
                <?php echo $strWebsite; ?>
            </fieldset>
            <input type="submit" value="Gửi">
        </form>
    </div>

</body>

</html>