<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    
<?php
session_start();
// contenu de la page 
?>
<h1> BONJOUR <?= $_SESSION["utilisateur"]["pseudo"] ?> </h1>
<p> Pseudo : <?= $_SESSION["utilisateur"]["pseudo"] ?> </p>
<?php
?>
</body>
</html>