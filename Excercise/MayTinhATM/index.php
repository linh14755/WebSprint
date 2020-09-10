<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ATM</title>
  <style>
    .content {
      width: 700px;
      height: 500px;
      border: 2px solid #9A9A9A;
      background: #E6E6E6;
      margin: 20px auto;
    }
   
    .content .info {
      height: 150px;
      padding: 0px;
    }
    .content .info img {
        width: 100px;
        height: 100px;
        overflow: hidden;
        float:left;
        border-radius:50%;
        padding:30px;
    }

    .content .info h1 {
      color: red;
      margin: 0px;
      padding-left: 275px;
    }

    .content .info p {
      font-size: 18px;
    }

    .content .info input {
      height: 30px;
    }

    .content .info input[type='text'] {
      width: 300px;
      font-size: 18px;
    }

    .content .info input[type='submit'] {
      width: 100px;
      font-size: 18px;
      border-radius: 5px;
      height: 34px;
    }

    .clr {
      clear:both;
    }

    .result div p {
      display: inline-table;
      font-size: 18px;
      font-weight: bold;
      margin-top: 0px;
      margin-bottom: 5px;
    }
    .result div p.col1{
      width: 200px;
      text-align: left;
    }
    .result div p.col2{
      width: 200px;
      text-align: center;
    }
    .result div p.col3{
      width: 200px;
      text-align: right;
    }
    .result {
      padding: 10px;
    }

    .result p.total {
      text-align: right;
      font-size: 20px;
      font-weight: bold;
      color: #3879D9;
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="info">

      <img src="image\pngtree-atm-machine-icon-png-image_3700444.jpg" alt="atm">
      <h1>Mô phỏng máy ATM</h1>
      <form action="#" method="get">
      <?php 
        $money = "";
        if (isset($_GET["money"])) {
            $money = $_GET["money"];
        }
      ?>
        <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
        <input type="text" name="money" value="<?php echo $money; ?>">
        <input type="submit" value="Rút tiền">
      </form>
    </div>
    <div class="clr"></div>
    <div class="result">
      <div class="normal">
        <p class="col1">Mệnh giá</p>
        <p class="col2">Số lượng</p>
        <p class="col3">Thành tiền</p>
      </div>
      <div class="clr"></div>
      <?php
        

        define("ONE", 1000);
        define("TWO", 2000);
        define("FIVE", 5000);
        define("ONE_0", 10000);
        define("TWO_0", 20000);
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);

        $five00 = 0;
        $two00 = 0;
        $one00 = 0;
        $five0 = 0;
        $two0 = 0;
        $one0 = 0;
        $five = 0;
        $two = 0;
        $one = 0;
        if (is_numeric($money) && $money >1000) {
            while ($money >= FIVE_00) {
                $five00 += 1;
                $money = $money - FIVE_00;
            } //500k

            while ($money >= TWO_00) {
                $two00 += 1;
                $money = $money - TWO_00;
            }  //200k

            while ($money >= ONE_00) {
                $one00 += 1;
                $money = $money - ONE_00;
            }  //100k

            while ($money >= FIVE_0) {
                $five0 += 1;
                $money = $money - FIVE_0;
            }  //50k
            while ($money >= TWO_0) {
                $two0 += 1;
                $money = $money - TWO_0;
            }   //20k
            while ($money >= ONE_0) {
                $one0 += 1;
                $money = $money - ONE_0;
            }   //10k
            while ($money >= FIVE) {
                $five += 1;
                $money = $money - FIVE;
            }   //5k
            while ($money >= TWO) {
                $two += 1;
                $money = $money - TWO;
            }    //2k
            while ($money >= ONE) {
                $one += 1;
                $money = $money - ONE;
            }    //1k
        }

        $total = (FIVE_00 * $five00) + (TWO_00 * $two00) + (ONE_00 * $one00) + (FIVE_0 * $five0)
                 + (TWO_0 * $two0) + (ONE_0 * $one0) + (FIVE * $five) + (TWO * $two) + (ONE * $one); 

      ?>
      <?php
        if ($five00 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(FIVE_00).'</p>
                    <p class="col2">'.$five00.'</p>
                    <p class="col3">'.number_format(FIVE_00 * $five00).'</p>
                </div>
                <div class="clr"></div>';
        }  // 500k

        if ($two00 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(TWO_00).'</p>
                    <p class="col2">'.$two00.'</p>
                    <p class="col3">'.number_format(TWO_00 * $two00).'</p>
                </div>
                <div class="clr"></div>';
        }   //200k


        if ($one00 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(ONE_00).'</p>
                    <p class="col2">'.$one00.'</p>
                    <p class="col3">'.number_format(ONE_00 * $one00).'</p>
                </div>
                <div class="clr"></div>';
        }  //100k

        if ($five0 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(FIVE_0).'</p>
                    <p class="col2">'.$five0.'</p>
                    <p class="col3">'.number_format(FIVE_0 * $five0).'</p>
                </div>
                <div class="clr"></div>';
        }   //50k

        if ($two0 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(TWO_0).'</p>
                    <p class="col2">'.$two0.'</p>
                    <p class="col3">'.number_format(TWO_0 * $two0).'</p>
                </div>
                <div class="clr"></div>';
        }   //20k

        if ($one0 > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(ONE_0).'</p>
                    <p class="col2">'.$one0.'</p>
                    <p class="col3">'.number_format(ONE_0 * $one0).'</p>
                </div>
                <div class="clr"></div>';
        }  //10k

        if ($five > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(FIVE).'</p>
                    <p class="col2">'.$five.'</p>
                    <p class="col3">'.number_format(FIVE * $five).'</p>
                </div>
                <div class="clr"></div>';
        }   //5k

        if ($two > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(TWO).'</p>
                    <p class="col2">'.$two.'</p>
                    <p class="col3">'.number_format(TWO * $two).'</p>
                </div>
                <div class="clr"></div>';
        }   //2k

        if ($one > 0) {
            echo '<div class="normal">
                    <p class="col1">'.number_format(ONE).'</p>
                    <p class="col2">'.$one.'</p>
                    <p class="col3">'.number_format(ONE * $one).'</p>
                </div>
                <div class="clr"></div>';
        }   //1k

      ?>
      <p class="total">Tổng Tiền: <?php echo $total ?></p>
    </div><!-- .result -->
  </div>
</body>

</html>