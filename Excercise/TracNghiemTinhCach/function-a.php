<?php
    $data = file('question.txt') or die("Can not read file!");
    array_shift($data);
    $arrayquestion = array();

    foreach ($data as $key => $value) {
        $tmp = explode("|","$value");    
        $id = $tmp[0];
        $question = $tmp[1];
        $arrayquestion[$id] = array("question" => $question);
    }
?>