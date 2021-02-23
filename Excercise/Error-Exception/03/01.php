<?php
function myError($error_level, $error_message, $error_file, $error_line, $error_context){
    die('Number message: '.$error_level.'</br>Message: '.$error_message.'</br>File: '.$error_file.'</br>Line: '.$error_line.'</br>Context: '.$error_context);
}

set_error_handler('myError');
echo $test;