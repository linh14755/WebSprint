<?php

echo '<pre>'; print_r($_POST); echo '</pre>';

if(filter_input(INPUT_POST,'mail',FILTER_VALIDATE_EMAIL)){
    echo 'email hop le';
}else{
    echo 'email khong hop le';
}