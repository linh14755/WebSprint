<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy Chòm Sao</title>
    <style>
 * {
  margin: 0;
  padding: 0;
}
.content {
    width: 600px;
    height: 350px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* border: sloid 1p black; */
}
.content div{
    margin: 20px;
    text-align: center;
}

h1{
    text-align: center;
    color:red;
}
/* .content div.result{
    margin-left: 50px; 
} */
.content div.result img{
    width: 100px;
    height: 100px;
    overflow: hidden;
    float:left;
    border-radius:50%;
}
.content div.result p{
    text-align: justify;
    font-size: 22px;
    height: 100px;
    line-height: 100px;
}
.content div.result p span{
    fonr-style:italic;
}
 
</style>
</head>
<body>
    <?php
        $day = "";
        $month = "";
        $img ="";
        $name = "";
        $time = "";
        $engname = "";
        $flag = "true"; 
        $result = "";

        if (isset($_POST["day"]) && isset($_POST["month"])) {
            $day = $_POST["day"];
            $month = $_POST["month"];

            if (is_numeric($day) && is_numeric($month)) {
                


                
                
                
                
                
                

                
                
                
                
                
                
                switch ($month) {
                    case 1:
                        //  Chòm sao CAPRICORNUS – MA KẾT sinh từ ngày 22/12 – 20/1
                        if ($day <= 20) {
                             $img = "maket";
                             $name ="MA KẾT";
                             $time = "22/12 – 20/1";
                             $engname = "CAPRICORNUS";
                        }
                        //  Chòm sao AQUARIUS – BẢO BÌNH sinh từ ngày 21/1 – 19/2
                        if ($day >= 20) {
                            $img = "baobinh";
                            $name ="BẢO BÌNH";
                            $time = "22/12 – 20/1";
                            $engname = "AQUARIUS";
                       }
                       if ($day < 1 || $day > 31) { $flag = false; }
                        break;
                        case 2:
                            //  Chòm sao PISCES – SONG NGƯ sinh từ ngày 20/2 – 20/3
                            if ($day >= 20) {
                                 $img = "songngu";
                                 $name ="SONG NGƯ";
                                 $time = "20/2 – 20/3";
                                 $engname = "PISCES";
                            }
                        if ($day < 1 || $day > 29) { $flag = false; }
                            break;
                        case 3:
                            // Chòm sao ARIES – DƯƠNG CƯU sinh từ ngày 21/3 – 20/4
                            if ($day >= 21) {
                                $img = "baobinh";
                                $name ="DƯƠNG CƯU";
                                $time = "21/3 – 20/4";
                                $engname = "ARIES";
                           }
                           if ($day < 1 || $day > 31) { $flag = false; }
                            break;
                            case 4:
                                //  Chòm sao TAURUS – KIM NGƯU sinh từ ngày 21/4 – 21/5
                                if ($day >= 21) {
                                    $img = "kimnguu";
                                    $name ="KIM NGƯU";
                                    $time = "21/4 – 21/5";
                                    $engname = "TAURUS";
                               }
                               if ($day < 1 || $day > 30) { $flag = false; }
                                break;
                                case 5:
                                    //  Chòm sao GEMINI – SONG TỬ sinh từ ngày 22/5 – 21/6
                                    if ($day >= 22) {
                                        $img = "songngu";
                                        $name ="SONG TỬ";
                                        $time = "22/5 – 21/6";
                                        $engname = "GEMINI";
                                   }
                                   if ($day < 1 || $day > 31) { $flag = false; }
                                    break;
                                    case 6:
                                        //  Chòm sao CANCER – CỰ GIẢI sinh từ ngày 22/6-23/7
                                        if ($day >= 22) {
                                            $img = "cugiai";
                                            $name ="CỰ GIẢI";
                                            $time = "22/6-23/7";
                                            $engname = "CANCER";
                                       }
                                       if ($day < 1 || $day > 30) { $flag = false; }
                                        break;
                                    case 7:
                                        //  Chòm sao LEO – HẢI SƯ sinh từ ngày 24/7 – 23/8
                                        if ($day >= 24) {
                                            $img = "sutu";
                                            $name ="HẢI SƯ";
                                            $time = "24/7 – 23/8";
                                            $engname = "LEO";
                                        }
                                        if ($day < 1 || $day > 31) { $flag = false; }
                                        break;
                                    case 8:
                                        //  Chòm sao VIRGO – XỬ NỬ sinh từ ngày 24/8 – 23/9
                                        if ($day >= 24) {
                                            $img = "xunu";
                                            $name ="XỬ NỬ";
                                            $time = "24/8 – 23/9";
                                            $engname = "VIRGO";
                                        }
                                        if ($day < 1 || $day > 31) { $flag = false; }
                                        break;
                                    case 9:
                                        //  Chòm sao LIBRA – THIÊN XỨNG sinh từ ngày 24/9 – 23/10
                                        if ($day >= 24) {
                                            $img = "thienyet";
                                            $name ="THIÊN XỨNG";
                                            $time = "24/9 – 23/10";
                                            $engname = "LIBRA";
                                        }
                                        if ($day < 1 || $day > 30) { $flag = false; }
                                        break;
                                    case 10:
                                        //  Chòm sao SCORPIO – HỔ CÁP sinh từ ngày 24/10 – 22/11
                                        if ($day >= 24) {
                                            $img = "bachduong";
                                            $name ="HỔ CÁP";
                                            $time = "24/10 – 22/11";
                                            $engname = "SCORPIO";
                                        }
                                        if ($day < 1 || $day > 31) { $flag = false; }
                                        break;
                                    case 11:
                                        //  Chòm sao SAGITTARIUS – NHÂN MÃ sinh từ ngày 23/11 – 21/12
                                        if ($day >= 23) {
                                            $img = "nhanma";
                                            $name ="NHÂN MÃ";
                                            $time = "23/11 – 21/12";
                                            $engname = "SAGITTARIUS";
                                        }
                                        if ($day < 1 || $day > 30) { $flag = false; }
                                        break;
                    default:
                        $flag = false;
                        break;
                }
                if ($flag) {
                    $result = '<div class="result">
                <img src="image/' . $img. '.jpg" alt="'  . $img. '">
                <p> ' . $name. ' <span> ( ' . $engname. ' : ' . $time. ')</span></p>
            </div>';
            
                }else{
                    $result = "Du lieu khong hop le";
                }
            }else{
                $flag = false;
            }
        }
    ?>
<div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post">
      <div class="row">
          <span>Ngày Sinh</span>
          <input type="text" name="day" value = "<?php echo $day; ?>">
      </div>
      <div class="row">
          <span>Tháng Sinh</span>
          <input type="text" name="month" value = "<?php echo $month; ?>">
      </div>
      <div class="row">
          <input type="submit" name="submit" value = "Lấy Chòm Sao";>
      </div>
    </form>
    <?php
        
        echo $result;
    ?>
    
  </div>
</body>
</html>
