<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<!--contenu du site-->
<body>
    <!--header-->
    <header class="container-fluid  header">
        <div class="container">
            <a href="index.php" class="logo"> ARCADIA  ZOO </a>
            <nav class="menu">
                <a href="index.php"> Accueil </a>
                <a href="services.php"> Services </a>
                <a href="habitats.php"> Habitats </a>
                <a href="connexion.php"> Connexion </a>
                <a href="contact.php"> Contact </a>
            </nav>

        </div>
    </header>

     <!--end header-->

    <h1 class="h1_inscription"> CONNEXION </h1>
    <form class="form_conn"    method="post">
        <fieldset  class="fieldset_form_conn">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username"  id="username">
            </div>
            </br>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password"  id="password">
            </div>
        </fieldset>
</br>
</br>
        <button type="submit"> Se connecter </button>
    </form>
<?php
// on vérifie si le formulaire a été envoyé
if(!empty($_POST)){
// on vérifie que tous les champs requis sont remplis
if(isset($_POST["username"], $_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
 } 
    else{
        echo ("le formulaire est incomplet !!!!");
    }
}
//on se connecte à la base de données 
require_once "includes/connect.php";
$sql="SELECT * FROM `utilisateur` WHERE `username`=:username";
$query= $db ->prepare($sql);
$query ->bindValue(":username" , $_POST["username"], PDO::PARAM_STR);
//$query ->bindValue(":password" , $_POST["password"], PDO::PARAM_STR);
$query -> execute();
$user= $query -> fetch();

if(!$user){
  die("l'utilisateur et/ou le mot de passe sont incorrect");
}

// si on a un  utilisateur qui existe en base de données 

if(!password_verify($_POST["password"] , $user["password"])){
    die("l'utilisateur et/ou le mot de passe sont incorrect");
}
// si l'utilisateur et le mot de passe sont correct, on va pouvoir ouvrir la session de l'utilisateur
//on démarre la session PHP
session_start();

// on va maintenant stocker dans $_SESSION  les infos de l'utilisateur
$_SESSION["user"]=[
    "id" => $user["id"],
    "pseudo" =>$user["username"],
    "role" => $user["role_id"]
];

var_dump($_SESSION);

// on redirige vers la page profil
header("Location:profil.php");

?>

</body>
</html>