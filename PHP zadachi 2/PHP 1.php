<?php
    $site=$_POST['site'];
    if (file_exists($site)==false || is_dir($site))
    {
        echo 'Failed to open the file... Check the entered path';
    }
    else
    {
        $html=file_get_contents($site);
        preg_match_all('/href="([^"]+)"/', $html, $links);
        foreach($links as $val)
        {
            foreach ($val as $element)
            {
                if ($element[0] == "h")
                {
                    echo $element . "</br>";
                }
            }
        }
    }
