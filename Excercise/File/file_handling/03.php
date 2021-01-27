<?php
$path    = 'abc/gh';

if (file_exists($path) == false) {
    mkdir($path, 0666); //666 = rw-rw-rw    ==>nếu là 7 thì read - write - excute
}


echo substr(sprintf('%o', fileperms($path)), -4);