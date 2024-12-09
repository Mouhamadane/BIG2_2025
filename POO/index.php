<?php

require_once("Etudiant.php");
require_once("connexion.php");

$email =$_POST["email"];
$password =$_POST["password"];

$sql = "SELECT * FROM etudiant WHERE email = ? AND password = ?";

$query = $connect->prepare($sql);


$testResult = $query->execute([$email, $password]);

if($testResult){ // if($testResult == true)
    $result = $query->fetch();

    if($result){
        header("Location: accueil.php");
    } else {
        echo "Mot de pass incorrect";
    }

} else {
    echo "La requête a échoué";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="email" id="" placeholder="Email">
        <br>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <button type="submit">Connexion</button>
    </form>
</body>
</html>