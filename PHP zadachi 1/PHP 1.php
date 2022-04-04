<?php
    $num=$_GET;
    foreach ($num as $val)
    {
        if (is_numeric($val) && !(preg_match_all('/^\.|[+-]\d+\.$/', $val)))
        {
            $sum=0;
            for ($i=0;$i<strlen($val);$i++)
            {
                $sum+=(int)$val[$i];
            }
        }
    }
    if (!empty($sum))
    {
        echo $sum;
    }
    else
    {
        echo 'Check your input';
    }