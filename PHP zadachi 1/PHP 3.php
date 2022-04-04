<?php
    $first=preg_split("/[\s,]+/",$_POST['Min']);
    $second=preg_split("/[\s,]+/",$_POST['Max']);
    if (is_numeric($first[0]) && !(preg_match_all('/^\.|[+-]\d+\.$/', $first[0])) && is_numeric($second[0]) && !(preg_match_all('/^\.|[+-]\d+\.$/', $second[0])))
    {
        $min = intval($first[0], 10);
        $max = intval($second[0], 10);
        $sum=0;
        for ($i=$min;$i<=$max;$i++)
        {
            if (fmod($i, 5) == 0)
            {
                $sum += $i;
            }
        }
    }
    else
    {
        echo 'Check your input';
    }
    if (!empty($sum))
    {
        echo "The sum is: " . $sum;
    }

