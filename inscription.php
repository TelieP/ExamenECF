<?php
  //on démarre la session PHP
  //session_start();
  // on vérifie que le formulaire a été envoyé
  if(!empty($_POST)){
  // on vérifie que les champs ont été  remplis
  if(isset($_POST["usename"],$_POST["nom"],$_POST["prenom"],$_POST["password"]) && !empty($_POST["username"]) 
  && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["password"])
){
    // le formulaire est complet 

 // on recupere les données en les protégeant
      $pseudo= strip_tags($_POST["username"]);
      $nom= strip_tags($_POST["nom"]);
      $prenom= strip_tags($_POST["prenom"]);

  // on hache le mot de passe qu'on va récupérer
      $password= password_hash($_POST["password"] , PASSWORD_ARGON2ID);
 //on enregistre en base de données 
// on commence par se connecter à la base de données 
 require_once "includes/connect.php";

 $sql= "INSERT INTO `utilisateur`(`username`,`nom`,`prenom`,`password`) VALUES(:pseudo, :nom , :prenom ,'$password')";

 // on prepare la requete
 $query= $db ->prepare($sql);
 $query->bindValue(":pseudo",$pseudo , PDO::PARAM_STR);
 $query->bindValue(":nom",$nom , PDO::PARAM_STR);
 $query->bindValue(":prenom",$prenom , PDO::PARAM_STR);
 $query->execute();
 // on connectera l'utilsateur 
 //$id=$db->lastInsertId();


}else{
    die("le formulaire est incompet");    
 }        
}
// on connecte l'utilisateur 


// on va maintenant stocker dans $_SESSION  les infos de l'utilisateur
//$_SESSION["user"]=[
  //"id" => $id,
  //"pseudo" =>$pseudo,
  //"prenom" =>$prenom,
  //"nom" =>$nom,
  //"role" => ["role_id"]
//];


// on redirige vers la page profil
//header("Location:profil.php");

  
//on inclut le header
include "includes/header.php";

//on inclut  la navbar

include_once "includes/navbar.php";

//on écrit le contenu de la page 
?>

    <h1 class="h1_inscription"> INSCRIPTION </h1>
    <form class="form_insc"    method="post">
        <fieldset  class="fieldset_form_inscr">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username"  id="username" >
            </div> </br>
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom"  id="nom" >
            </div> </br>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom"  id="prenom">
            </div> </br>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password"  id="password">
            </div> </br></br>
        </fieldset>
        <button type="submit"> S'inscrire </button>
    </form>
    

<?php
//on inclut le footer

include "includes/footer.php";
?>