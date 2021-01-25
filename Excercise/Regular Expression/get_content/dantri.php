<meta charset="UTF-8">
<?php
$content = file_get_contents('https://dantri.com.vn/the-thao.htm');

//img
$pattern = '#<div class="news-item news-item--.*href="(.*)".*itle="(.*)">.*lazy-src="(.*)".*class="news-item__content">.*href=".*">(.*)</a>#imsU';
preg_match_all($pattern, $content, $matches);

$result = array();

foreach ($matches[1] as $key => $value) {
    $result[$key]['href'] = $matches[1][$key];
    $result[$key]['tittle'] = $matches[2][$key];
    $result[$key]['img'] = $matches[3][$key];
    $result[$key]['content'] = $matches[4][$key];
}


echo "<pre>";
print_r($result);
echo "</per";
