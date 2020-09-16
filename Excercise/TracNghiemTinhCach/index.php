<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      * {
            margin: 0px;
            padding: 0px;
}

.content {
            width: 800px;
            padding: 10px;
            border: 2px solid #ddd;
            height: auto;
            margin: 20px auto;
}

.content h1 {
            color: red;
            text-align: center;
            padding: 10px 0px;
}

.question {
            font-size: 18px;
            line-height: 24px;
}

.question p {
            font-size: 20px;
            line-height: 30px;
}

.question p span {
            font-weight: bold;
}

.question ul li {
            list-style-type: none;
            padding-left: 40px;
}

.content input[type="submit"] {
            margin: 0 auto;
            display: block;
            height: 40px;
            width: 100px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
}
  </style>
</head>
<body>
<?php
  require_once('function-a.php'); //$arrayquestion
  require_once('function-b.php'); //$arrayoption

  $newarr = array();

  foreach ($arrayquestion as $key => $value) {
    $newarr[$key]["question"] = $value["question"];
    $newarr[$key]["sentences"] = $arrayoption[$key];
  }
  // echo "<pre>";
  //     print_r($newarr);
  //   echo "</pre>";
?>
  <div class="content">
      <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST" name="main-form">
        <?php
        $i = 1;
            foreach ($newarr as $key => $value) {
                echo '<div class="question">';
                echo '<p><span>Câu hỏi '.$i.': </span>'.$value["question"].'</p>';

                echo '<ul>';
                  foreach ($value["sentences"] as $keyC => $valueC) {
                    echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC["option"].'</label></li>';  
                  }
                echo '</ul>';

                $i++;
            }
        ?>
        <input value="Submit" type="submit">
        </form>
  </div>
</body>
</html>