<meta charset="UTF-8">
<?php
$x = 1;//1 , true , on  là kiểu bool

// filter_var($x,FILTER_VALIDATE_BOOLEAN);

if(!filter_var($x,FILTER_VALIDATE_BOOLEAN)){
    echo "</br> $x Không là kiểu boolean";
}else{
    echo "</br> $x là kiểu boolean";
}