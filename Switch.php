<?php
$nombre1 = 15;
$nombre2 = 10;

switch (true) {
    case ($nombre1 > $nombre2):
        echo "$nombre1 est supérieur à $nombre2";
        break;
    case ($nombre1 < $nombre2):
        echo "$nombre1 est inférieur à $nombre2";
        break;
    case ($nombre1 == $nombre2):
        echo "$nombre1 est égal à $nombre2";
        break;
    default:
        echo "Non comparables";
        break;
}

