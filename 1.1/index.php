<?php

function categorieEnfant ($age){
if ($age < 3) {
        return "creche";
    } elseif ($age < 6) {
        return "maternelle";
    } elseif ($age < 11) {
        return "primaire";
    } elseif ($age < 16) {
        return "college";
    } elseif ($age < 18) {
        return "lycee";
    } else {
        return "hors scolarite";
    }
}





echo categorieEnfant(5); 





?>