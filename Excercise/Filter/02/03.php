<meta charset="UTF-8">
<?php
$value = 0.1;
// filter_var($x,FILTER_VALIDATE_BOOLEAN);

if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
    echo "</br> $value Không là kiểu float";
} else {
    echo "</br> $value là kiểu float";
}
