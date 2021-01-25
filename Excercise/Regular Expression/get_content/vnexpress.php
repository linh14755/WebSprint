<meta charset="UTF-8">
<?php
$content = file_get_contents('https://vnexpress.net/kinh-doanh');

$pattern = '#<article class="item-news item-news-common" data-publishtime=.*">(.*)</article>#imsU';

preg_match_all($pattern, $content, $matches);


foreach ($matches[0] as $key => $value) {
    $result = array();
    //link
    $pattern = '#href="(.*)"#imsU';
    preg_match($pattern, $value, $link);

    $result[$key]['link'] = $link[1];

    //image
    $pattern = '#data-src="(.*)"#imsU';
    preg_match($pattern, $value, $img);
    $result[$key]['img'] = $img[1];

    //tittle
    $pattern = '#<h3 class="title-news">.*title="(.*)"#imsU';
    preg_match($pattern,$value,$tittle);
    $result[$key]['tittle'] = $tittle[1];

    //description
    $pattern = '#<p class="description">.*\">(.*)</a#imsU';
    preg_match($pattern,$value,$description);
    $result[$key]['description'] = $description[1];

    echo "<pre>";
    print_r($result);
    echo "</per";
}
