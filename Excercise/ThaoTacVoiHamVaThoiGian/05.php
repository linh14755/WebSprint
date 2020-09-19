<!-- Hiển thị thời gian dạng: 03:09 PM Thứ 3, ngày 18/06/2013 -->
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
            //03:09 PM Thứ 3, ngày 18/06/2013
            $result = date("h:i A D, \N\g\à\y d/m/Y", time());

            $strEn = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
            $strVie = array('Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật');

            $result = str_replace($strEn,$strVie,$result);
            // $result = str_replace(",",", Ngày ",$result);

            echo $result;
        ?>
        
        </div>
    </div>  <!--content -->
</body>

</html>