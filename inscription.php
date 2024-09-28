<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia zoo</title>
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

    <h1 class="h1_inscription"> INSCRIPTION </h1>
    <form class="form_insc"    method="post">
        <fieldset  class="fieldset_form_inscr">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username"  id="username">
            </div>
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom"  id="nom">
            </div>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom"  id="prenom">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password"  id="password">
            </div>
        </fieldset>
        <button type="submit"> S'inscrire </button>
    </form>
    <?php 
    // on vérifie que le formulaire a été envoyé
    if(!empty($_POST)){
    // on vérifie que les champs ont été  remplis
    if(isset($_POST["usename"],$_POST["nom"],$_POST["prenom"],$_POST["password"]) && !empty($_POST["username"]) 
    && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["password"])){
   // on recupere les données en les protégeant
        $pseudo= strip_tags($_POST["username"]);
        $nom= strip_tags($_POST["nom"]);
        $prenom= strip_tags($_POST["prenom"]);

    // on hache le mot de passe qu'on va récupérer
        $password= password_hash($_POST["password"] , PASSWORD_ARGON2ID);
   //on enregistre en base de données 
   // on commence par se connecter à la base de données 

   require_once"includes/connect.php";
   $sql= "INSERT INTO `utilisateur`(`username`,`nom`,`prenom`,`password`) VALUES(:pseudo, :nom , :prenom ,'$password')";

   // on prepare la requete
   $query= $db ->prepare($sql);
   $query ->bindValue(":pseudo",$pseudo , PDO::PARAM_STR);
   $query ->bindValue(":nom",$nom , PDO::PARAM_STR);
   $query ->bindValue(":prenom",$prenom , PDO::PARAM_STR);
   $query ->execute();
    }
    else{
        die("le formulaire est incompet");
    }
}
// on connecte l'utilisateur 
//on démarre la session PHP
session_start();

// on va maintenant stocker dans $_SESSION  les infos de l'utilisateur
$_SESSION["utilisateur"]=[
    "id" => $utilisateur["id"],
    "pseudo" =>$utilisateur["username"],
    "prenom" =>$utilisateur["prenom"],
    "nom" =>$utilisateur["nom"],
    "role" => $utilisateur["role_id"]
];

// on redirige vers la page profil
//header("location:profil.php");

    ?>

</body>
</html>