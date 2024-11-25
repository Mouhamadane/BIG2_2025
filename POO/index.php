<?php

require_once("Etudiant.php");

// Instaciation avec surcharge
$tab = ["id"=> "221", "prenom"=>"Modou", "nom"=>"Fall"];
$etudiant = new Etudiant($tab);

// Modification de l'ID avec le setter setId()
$etudiant->setId("250");
$etudiant->setPrenom("Fama").
var_dump($etudiant);

echo "<br>";
echo "<br>";
echo "<br>";

// Instanciation d'un autre objet 
$etudiant2 = new Etudiant();
var_dump($etudiant2);
