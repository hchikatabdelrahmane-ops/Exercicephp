<?php


function doubleboucle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($w = 1; $w <= $i; $w++) {
            echo $i;
        }
        echo "<br>";
    }
}


doubleboucle(5);
?>






