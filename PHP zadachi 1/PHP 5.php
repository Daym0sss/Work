<?php
    $input=preg_split("/[\s,]+/",$_POST['fio']);
    $surname=$input[0];
    echo $surname . " ";
    $name=$input[1];
    $first=mb_substr($name,0,1);
    echo $first . ". ";
    $lastname=$input[2];
    $first=mb_substr($lastname,0,1);
    echo $first . "." ;