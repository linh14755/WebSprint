<!-- Viết chương trình sử dụng Datepicker. -->
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
</head>

<body>
  <?php
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";
    $date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
  ?>
  <form action="#" method="POST">
    <p>Date: <input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date ?>"></p>
    <input type="submit" value="Submit">
  </form>
</body>

</html>