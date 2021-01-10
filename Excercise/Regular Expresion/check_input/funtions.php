<?php

function check_email($value)
{
    $flag = false;
    $parttern = '#^[a-z][a-z0-9_\.]{4,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
    if (preg_match($parttern, $value) == true) {
        $flag = true;
    }
    return $flag;
}

function check_username($value)
{
    $flag = false;
    $parttern = '#^[a-z_][a-z0-9_\.\s]{4,31}$#';
    if (preg_match($parttern, $value) == true) {
        $flag = true;
    }
    return $flag;
}

function check_passrord($value)
{
    $flag = false;
    $parttern = '#^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,8}$#';
    if (preg_match($parttern, $value) == true) {
        $flag = true;
    }
    return $flag;
}

function check_url($value)
{
    $flag = false;
    $parttern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}[\.a-z0-9]{2,4}$#';
    if (preg_match($parttern, $value) == true) {
        $flag = true;
    }
    return $flag;
}


function check_input($value, $type = 'email')
{
    switch ($type) {
        case 'email':
            $parttern = '#^[a-z][a-z0-9_\.]{4,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
            break;
        case 'username':
            $parttern = '#^[a-z_][a-z0-9_\.\s]{4,31}$#';
            break;
        case 'password':
            $parttern = '#^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,8}$#';
            break;
        case 'website':
            $parttern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}[\.a-z0-9]{2,4}$#';
            break;
    }

    $flag = preg_match($parttern, $value);

    return $flag;
}

function createInput($type, $name,$placeholder, $value, $error)
{
    $html = '<input type="' . $type . '" name="' . $name . '" placeholder="Nhập '.$placeholder.'" value="' . $value . '">
                <p>' . $error . '</p>';

    return $html;
}
