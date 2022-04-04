<?php
    $num=$_GET;
    foreach ($num as $val)
    {
        $amount=intval($val,10);
        $array=array();
        for($i=0;$i<$amount;$i++)
        {
            array_push($array,rand(0,1000));
        }
        foreach ($array as $element)
        {
            echo $element . " ";
        }
        echo "</br>";
        $max=max($array);
        $min=min($array);
        $key_min=array_search($min,$array);
        $key_max=array_search($max,$array);
        $array[$key_max]=$min;
        $array[$key_min]=$max;
        foreach ($array as $element)
        {
            echo $element . " ";
        }
    }