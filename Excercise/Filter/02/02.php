<meta charset="UTF-8">
<?php
$email = 'linhnguyen@gmail.com';

// filter_var($x,FILTER_VALIDATE_BOOLEAN);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "</br> $email Không là kiểu email";
}else{
    echo "</br> $email là kiểu email";
}