<!-- So sánh hai ngày bất kỳ -->
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
      $("#date-star").datepicker({
        dateFormat: "dd-mm-yy",
        defaultDate: "-2m",
        changeYear: true,
        changeMonth: true,
        yearRange: "2000:2022"
      });
    });
    $(function () {
      $("#date-end").datepicker({
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
        <h1>So Sánh 2 thời gian</h1>
        <?php
            $datestar = (isset($_POST["date-star"])) ? $_POST["date-star"] : "";
            $dateend = (isset($_POST["date-end"])) ? $_POST["date-end"] : "";
        ?>
        <form action="#" method="POST">
            <div class="row">
                <span>Date Start:</span>  
                <input readonly="readonly" id="date-star" type="text" name="date-star" value="<?php echo $datestar ?>">
            </div>
            <div class="row">
                <span>Date End:</span>  
                <input readonly="readonly" id="date-end" type="text" name="date-end" value="<?php echo $dateend ?>">
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="result">
            <?php
                function compareTwoDay ($datestar, $dateend) {
                    //Start
                    $ardateStart = date_parse_from_format("d/m/Y", $datestar);
                    $timeStampStart = mktime(0, 0, 0, $ardateStart['month'], $ardateStart['day'], $ardateStart['year']);

                    //end
                    $ardatEnd = date_parse_from_format("d/m/Y", $dateend);
                    $timeStampEnd = mktime(0, 0, 0, $ardatEnd['month'], $ardatEnd['day'], $ardatEnd['year']);

                    // 0, 1, -1
                    $result = 0;
                    if ($timeStampEnd > $timeStampStart) {
                        $result = 1;
                    }else if ($timeStampEnd < $timeStampStart) {
                        $result = -1;
                    }   
                    return $result; 
                }

                if (compareTwoDay ($datestar, $dateend) == 1) {
                    echo "End > Start";
                }else if (compareTwoDay ($datestar, $dateend) == -1) {
                    echo "Start > End";
                }else{
                    echo "Start = End";
                }
            ?>
        </div>
    </div>  <!--content -->
</body>

</html>