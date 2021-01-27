<meta charset="UTF-8">
<?php
$data = parse_ini_file('test.ini',true);

echo '<pre>';
print_r($data);
echo '</pre>';