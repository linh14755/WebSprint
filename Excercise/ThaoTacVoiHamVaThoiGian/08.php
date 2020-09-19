<!-- Xác định khoảng thời gian đã trôi qua -->
<?php
    //timePost so sanh timeCurrent
    $timepost = '18/6/2013 09:20:23';
    $timeReply =  '20/6/2013 10:20:23';

    $datePost = date_parse_from_format( 'd/m/Y H:i:s', $timepost);
    $dateReply = date_parse_from_format( 'd/m/Y H:i:s', $timeReply);
    
    $tsPost = mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
    $tsReply = mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);
    
    $distance = $tsReply - $tsPost;

    //23 second ago
    //23 minute ago
    //2 hour ago
    // Yesterday  at 09:20:23
    // 18/06/2013 at 09:20:23

    switch ($distance) {
        case ($distance < 60):
            $result = ($distance == 1) ? $distance ." second ago" : $distance ." seconds ago";
            break;
        case ($distance >= 60 && $distance < 3600):
            $minute = round($distance/60);
            $result = ($minute == 1) ? $minute ." minute ago" : $minute ." minutes ago";
            break;
        case ($distance >= 3600 && $distance < 86400):
            $hour = round($distance/(60*60));
            $result = ($hour == 1) ? $hour ." hour ago" : $hour ." hours ago";
            break;  
        case (round($distance/86400) == 1):
            $result = 'Yesterday at '.date('H:i:s', $tsReply);
            break;    

        default: // > 1ngày
            $result = date('d/m/Y \a\t H:i:s', $tsReply);
            break;
    }

    echo "<pre>";
        print_r($result);
    echo "</pre>";
?>