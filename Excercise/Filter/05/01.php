<?php
$array = array(
    'name' => 'Nguyen Van A',
    'age' => '21',
    'email' => 'vana@gmail.com'
);

$filters = array(
    'name' => array('filter' => FILTER_CALLBACK, 'options' => 'ucwords'),
    'age' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 1, 'max_range' => 1000)),
    'email' => array('filter' => FILTER_VALIDATE_EMAIL)
);

$result = filter_var_array($array, $filters);

echo '<pre>';
print_r($result);
echo '</pre>';
