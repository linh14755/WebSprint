<!-- Định dạng lại cách hiển thị ngày tháng khi sử dụng Datepicker -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        defaultDate: "-2m",
        changeYear: true,
        changeMonth: true,
        yearRange: "2000:2022"
      });
    });
  </script>
  <style>
        * { margin: 0px; padding: 0px; }
        .content { margin: 20px auto; width: 600px;  border: 2px solid #ddd; padding: 10px; }
        .content h1 { text-align: center; color: #F00; margin-bottom: 10px; }
        .content div.row { margin-bottom: 10px; }
        .content div.row span { width: 100px; display: inline-block; }
        .content div.row select { width: 100px; }
        .content div.result span { margin: 10px 0px; display: inline-block; }
        .content div.row input[type=submit] { padding: 2px 10px; }
    </style>
</head>

<body>
    <div class="content">
        <h1>Excercise 01</h1>
        <?php
            $date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
        ?>
        <form action="#" method="POST">
            <div class="row">
                <span>Date:</span>  
                <input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date ?>">
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="result">
            <?php 
                echo  "Input: $date"."</br>";
                $date = date_parse_from_format("d/m/Y", $date);
                $timeStamp = mktime(0, 0, 0, $date['month'], $date['day'], $date['year']);
                echo  "Output:".date('d-m-y',$timeStamp);
            ?>
        </div>
    </div>  <!--content -->
</body>

</html>