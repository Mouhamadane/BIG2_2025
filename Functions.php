<?php
//Fonction nombre pair
function estPair($number) {
    if ($number % 2 == 0){
        return true;
    }
    return false;
}

//Fonction nombre premier
function isPremier($number, $div=2){
    if ($number >= $div*$div) {
        if ($number % $div == 0) {
            return false;
        }
        return isPremier($number, $div+1);
    }
    return true;

}
// Tableau nombre premiers de 1 à 100
function TabPremier(){
    $tab=[];
    for ($i=1; $i <=100; $i++) { 
        if (isPremier($i)) {
            array_push($tab, $i);
        }
    }
    return $tab;
}

//Utilisation des fonctions

print_r(TabPremier());



