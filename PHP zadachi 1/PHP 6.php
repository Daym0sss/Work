<?php
    $input=$_GET;
    foreach ($input as $val)
    {
        $time=intval($val,10);
        $hours=fmod($time,60);
        $minutes=fmod($hours,5);
        if ($minutes>0 && $minutes<3)
        {
            echo "Сейчас горит зелёный цвет";
        }
        else if ($minutes>3 && $minutes<5)
        {
            echo "Сейчас горит красный цвет";
        }
        else if ($minutes==0)
        {
            echo "Переключение с красного на зелёный цвет";
        }
        else if ($minutes==3)
        {
            echo "Переключение с зелёного на красный цвет";
        }
    }