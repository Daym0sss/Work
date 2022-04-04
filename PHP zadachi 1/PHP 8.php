<?php
    $input=$_GET;
    foreach ($input as $val)
    {
        switch ($val)
        {
            case "2":
                echo "Данная карта двойка";
                break;
            case "3":
                echo "Данная карта тройка";
                break;
            case "4":
                echo "Данная карта четвёрка";
                break;
            case "5":
                echo "Данная карта пятёрка";
                break;
            case "6":
                echo "Данная карта шестёрка";
                break;
            case "7":
                echo "Данная карта семёрка";
                break;
            case "8":
                echo "Данная карта восьмёрка";
                break;
            case "9":
                echo "Данная карта девятка";
                break;
            case "10":
                echo "Данная карта десятка";
                break;
            case "11":
                echo "Данная карта валет";
                break;
            case "12":
                echo "Данная карта дама";
                break;
            case "13":
                echo "Данная карта король";
                break;
            case "14":
                echo "Данная карта туз";
                break;
            default:
                echo "Нет такой карты";
                break;
        }
    }