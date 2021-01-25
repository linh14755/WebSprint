<meta charset="UTF-8">
<?php
$content = file_get_contents('https://www.agribank.com.vn/vn/ty-gia');

// Get content from agribank table
$pattern = '#(?<=class="table table-bordered table-striped" dir="ltr" style="border-collapse: collapse">).*(?=</table)#imsu';  //i không pb hoa thường, m tìm kiếm trên tất cả các dòng, u = UTF-8

preg_match($pattern, $content, $match);

//Get content convert to array
$pattern = '#<tr.*<td>(.*)</td.*td>(.*)</td.*td>(.*)</td.*td>(.*)</td.*/tr>#imsU';

preg_match_all($pattern,$match[0],$matchnew);

foreach($matchnew[1] as $key => $value){
    $result[$value][] = $matchnew[2][$key];
    $result[$value][] = $matchnew[3][$key];
    $result[$value][] = $matchnew[4][$key];
}

echo "<pre>";
    print_r($result);
echo "</per";
