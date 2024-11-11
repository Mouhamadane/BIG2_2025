<?php

$etudiants = [
    [
    "nom" => "Lamine",
    "prenom" => "Ndiaye",
    "age" => 20,
    "classe" => "BIG2"
    ],
    [
    "nom" => "Penda",
    "prenom" => "Mbaye",
    "age" => 30,
    "classe" => "BIG2"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td>prenom</td>
            <td>Age</td>
            <td>Classe</td>
        </tr>
        <?php foreach($etudiants as $etudiant){?>
            <tr>
                <td><?= $etudiant["nom"] ?></td>
                <td><?= $etudiant["prenom"] ?></td>
                <td><?= $etudiant["age"] ?></td>
                <td><?= $etudiant["classe"] ?></td>
               
            </tr>
        <?php } ?>
    </table>
</body>
</html>