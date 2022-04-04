<?php
    $input_big_number=preg_split("/[\s,]+/",$_POST['input']);
    $input_user_number=preg_split("/[\s,]+/",$_POST['user']);;
    if (is_numeric($input_big_number[0]) && !(preg_match_all('/^\.|[+-]\d+\.$/', $input_big_number[0])))
    {
        $input_number=$input_big_number[0];
    }
    if (is_numeric($input_user_number[0]) && !(preg_match_all('/^\.|[+-]\d+\.$/', $input_user_number[0])))
    {
        $user_number=$input_user_number[0];
    }
    if (!empty($input_number) && !empty($user_number))
    {
        $counter=0;
        for($i=0;$i<strlen($input_number);$i++)
        {
            if ($input_number[$i]==$user_number[0])
            {
                $counter++;
            }
        }
        echo "Number " . $user_number[0] . " is met " . $counter . " times in number " . $input_number;
    }
    else
    {
        echo 'Check your input';
    }