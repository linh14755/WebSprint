<meta charset="UTF-8">

<?php
$content = file('text.txt') or die('can not open file');

$content = implode('', $content);

$pattern = array('/<script([^>]*)>/i','/<\/script([^>]*)>/i' );
$replacement = array('<pre>&lt;script\\1&gt;','&lt;script\\1&gt;</pre>');
$result = preg_replace($pattern, $replacement, $content);

echo $result;

?>