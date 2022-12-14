<?php
$array = array(18, 4, 4, 4, 4, 4, 4, 4, 18);
    $char = 0;
    for($i=0;$i<count($array);$i++){
        for($j=0;$j<$array[$i];$j++){
            echo $char;
        }
        $char = 1-$char;
    }
/*1 1 1 0 0 0 0 1 1 */
?>