<!-- Cộng thêm giá trị cho thời gian -->
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
      $("#date").datepicker({
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
    <?php 
        require_once("function.php");

        $arrType = array('-SelectType-','Day','Month','Year');

        $date = (isset($_POST["date"])) ? $_POST["date"] : "";
        $type = (isset($_POST["select-type"])) ? $_POST["select-type"] : "";
        $value = (isset($_POST["value"])) ? $_POST["value"] : "";

        
        $strType = createSelectbox($arrType,'select-type',$type);

        $result = addTime($date, 'd/m/Y', $arrType[$type], $value);
    ?>
    <div class="content">
        <h1>Cộng thêm giá trị cho thời gian</h1>
        <form action="#" method="POST">
            <div class="row">
                <span>Date:</span>  
                <input readonly="readonly" id="date" type="text" name="date" value="<?php echo $date ?>">
            </div>
            <div class="row">
                <span>Type:</span>  
                <?php echo $strType ?>
            </div>
            <div class="row">
                <span>Value:</span>  
                <input id="value" type="text" name="value" value="<?php echo $value ?>">
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
            <div class="row">
                <?php echo "Giá trị mới là: $result" ?>
            </div>
        </form>
        <div class="result">
        </div>
    </div>  <!--content -->
</body>

</html>