<?php


class Form
{
    public function open($arr)
    {
        echo '<form ';
        foreach ($arr as $val)
        {
            echo key($arr) . '="' . $val . '" ';
        }
        echo '>';
    }

    public function close()
    {
        echo '</form>';
    }

    public function input($arr)
    {
        $str="<input ";
        foreach ($arr as $val)
        {
            $key=array_search($val,$arr);
            $str.= $key . "=" . "\"$val\" ";
        }
        $str.=">";
        echo $str;
    }

    public function submit($arr)
    {
        foreach ($arr as $val)
        {
            echo '<input type="submit" value="' . $val . '">';
        }
    }

    public function password($arr)
    {
        echo '<input type="password"';
        foreach ($arr as $val)
        {
            $key=key($arr);
            echo "$key=" . "\"$val\" ";
        }
        echo '>';
    }

    public function textarea($arr)
    {
        echo '<textarea ';
        foreach ($arr as $val)
        {
            if ($val!="value")
            {
                echo key($arr) . '="' . $val . '" ';
            }
            else
            {
                echo ">" . $val . "</textarea>";
            }
        }
    }
}