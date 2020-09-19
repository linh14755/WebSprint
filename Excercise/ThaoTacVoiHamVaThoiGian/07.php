<!-- Tìm số ngày trong tháng, của một năm nào đó -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Làm việc với thời gian</title>
  
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
        <h1>Làm việc với thời gian</h1>
        <?php
            $month = 2;
            $year = 2013;
            
            $timeStamp = mktime( 0, 0, 0, $month, 1, $year);

            echo "Tháng $month Năm $year có tổng số ngày là: ".$tongsongay = date('t', $timeStamp);
        ?>
        
        </div>
    </div>  <!--content -->
</body>

</html>