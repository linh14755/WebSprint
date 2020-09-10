<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vẽ Tam Giác</title>
    <style>
 * {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
.content {
    width: 777px;
    height: 350px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

h1{
    
    text-align: center;
    color:red;
}

.content ul li{
    display: inline-block;
}
.content .result{
    /* text-align: center; */
    margin-left: 340px;
}
 
</style>
</head>
<body>
    
    <div class="content">
        <h1>Vẽ tam Giác</h1>
        <ul>
            <li><a href="?type=1"><img src="image\1.JPG"></a></li>
            <li><a href="?type=2"><img src="image\2.JPG"></a></li>
            <li><a href="?type=3"><img src="image\3.JPG"></a></li>
        </ul>
        <div class="result">
            <?php

                $result = "";

                if (isset($_GET["type"])) {
                    $type = $_GET["type"];

                    switch ($type) {
                        case 1:
                            for ($i=1; $i <= 6; $i++) { 
                                $result .= str_repeat("*",$i). '<br />';
                            }
                                echo $result;                        
                            break;
                        case 2:
                            $i = 6;
                            while ($i >= 1) {
                                $result .= str_repeat("*",$i). '<br />';
                                $i--;
                            }
                                echo $result;
                            break;
                        case 3:
                                        //     *   i = 1 ,  space = 5, * = 1
                                        //    ***   i = 2 ,  space = 4, * = 3
                                        //   *****   i = 3 ,  space = 3, * = 5
                                        //  *******
                                        // *********
                                        //***********
                            $i = 1;
                            $space = "";
                            $sao = 1;
                            
                            do {
                                $space = str_repeat("&nbsp&nbsp",6 - $i);
                                $result .= $space.str_repeat("*",$sao). '<br />';
                                $i++;
                                $sao = $sao + 2;
                                
                            } while ($i <= 6);
                            echo $result;
                            break;
                        default:
                            # code...
                            break;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
