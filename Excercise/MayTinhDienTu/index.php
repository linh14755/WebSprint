<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mô Phỏng Máy Tính Điện Tử</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $n1 = "";
        $n2 = "";
        $caculate = "";
        $flag = true;

        if (isset($_POST["number1"]) && isset($_POST["caculate"]) && isset($_POST["number2"])) {
            $n1 = $_POST["number1"];
            $caculate = $_POST["caculate"];
            $n2 = $_POST["number2"];
        }
        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($caculate) {
                case '+':
                    $result = $n1 + $n2; 
                    break;
                case '-':
                    $result = $n1 - $n2; 
                    break;
                case '*':
                    $result = $n1 * $n2; 
                    break;
                case '/':
                    $result = $n1 / $n2; 
                    break; 
                case '%':
                    $result = $n1 % $n2; 
                    break;   
                default:
                    #code 
                    break;
            }
        }else{
            $flag = false;
            $result = "Khong thuc hien duoc";
        }
        
    ?>
        <div class="content">
            <p>Mô Phỏng Máy Tính Điện Tử</p>
            <form action="#" method="post" name="main-form">
                <div>
                    <span>Số thứ nhất</span>
                    <input type="text" name="number1" value="<?php echo $n1; ?>">
                </div>
                <div>
                    <span>Phép toán</span>
                    <input type="text" name="caculate" value="<?php echo $caculate; ?>">
                </div>
                <div>
                    <span>Số thứ hai</span>
                    <input type="text" name="number2" value="<?php echo $n2;  ?>">
                </div>
                <div>
                    <input type="submit" name="submit" value="Xem Kết Quả">
                </div>
                <div>
                    <?php
                    if ($flag) {
                        echo "Kết quả: ".$n1." ".$caculate." ".$n2." "."=   ".$result;   
                    } else {
                        echo $result;
                    }
                    ?>
                </div>
            </form>
        </div>
</body>
</html>