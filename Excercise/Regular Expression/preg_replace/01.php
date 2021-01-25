<meta charset="UTF-8">
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .a {
        font-weight: bold;
        color: red;
    }
</style>
<?php
$content = file('text.txt') or die('can not open file');

$content = implode('', $content);

$pattern = '#Lorem#i'; //Thêm i để không phân biệt hoa thường 
$replacement = '<a  class="a" href = "https://www.youtube.com/">Lorem<a/>';

$result = preg_replace($pattern, $replacement, $content);

echo $result;
?>