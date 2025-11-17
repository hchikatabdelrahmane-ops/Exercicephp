<?php
 
function my_strrev($str) {
    
    $count = strlen($str);
 
    
    $result = "";
 
    
    $i = $count - 1;
    while ($i >= 0) {
        
        $result = $result . $str[$i];
        $i = $i - 1;
    }
 
    
    return $result;
}
echo my_strrev("Bonjour ");
 