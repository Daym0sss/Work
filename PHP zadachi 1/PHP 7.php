<?php
    $input=$_GET;
    foreach ($input as $val)
    {
        $year=intval($val,10);
        if (fmod($year,4)==0)
        {
            if (fmod($year,100)==0)
            {
                if (fmod($year,400)==0)
                {
                    echo "Год високосный";
                }
                else
                {
                    echo "Год не високосный";
                }
            }
            else
            {
                echo "Год високосный";
            }
        }
        else
        {
            echo "Год не високосный";
        }
    }