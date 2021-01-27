<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery-3.5.1.js"></script>
  <script>
    $(document).ready(function() {
      $('#btnHuy').click(function() {
        window.location = 'index.php';
      });
    });
  </script>
</head>

<body>
  <?php
  require_once('function.php');

  $id = $_GET['id'];
  $content = file_get_contents("./file/$id.txt");
  $content = explode('||', $content);

  $title = $content[0];
  $description = $content[1];

  $errorTitle = '';
  $errorDescription = '';
  $mesage = '';
  if (isset($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    //check title
    if (checkEmpty($title))  $errorTitle = '<p>Dữ liệu không được rỗng!</p>';
    if (checkLength($title, 5, 100))  $errorTitle .= '</br><p>Chiều dài từ 5 đến 100 kí tự!</p>';

    //check description
    if (checkEmpty($description))  $errorDescription = '<p>Dữ liệu không được rỗng!</p>';
    if (checkLength($description, 10, 5000))  $errorDescription .= '</br><p>Chiều dài từ 10 đến 5000 kí tự!</p>';

    //create file
    if ($errorTitle == '' && $errorDescription == '') {
      $data = $title . '||' . $description;

      $filename = './file/' . $id . '.txt';
      if (file_put_contents($filename, $data)) {
        // $title = '';
        // $description = '';
        $mesage = 'Sửa tin thành công!';
      }
    }
  }
  ?>


  <div class="wrapper">
    <div class="heading">ADD FILE</div>
    <div id="form">
      <form action="#" method="post">
        <div class="row">
          <p class="title">Tiêu đề</p>
          <input type="text" name="title" value="<?php echo $title ?>">
          <div class="error"><?php echo $errorTitle ?></div>
        </div>
        <div class="row">
          <p class="title">Mô tả</p>
          <textarea name="description" rows="5" cols="100"><?php echo $description ?></textarea>
          <div class="error"><?php echo $errorDescription ?></div>
        </div>
        <div class="row">
          <input type="submit" value="Lưu">
          <input type="button" value="Hủy" id="btnHuy">
          <div class="title"><?php echo $mesage ?></div>
        </div>

      </form>
    </div>
  </div>
</body>

</html>