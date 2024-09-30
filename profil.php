
    
<?php
session_start();
//on inclut le header
include "includes/header.php";

//on inclut  la navbar

include_once "includes/navbar.php";
// contenu de la page 
?>
<h1> BONJOUR <?= $_SESSION["user"]["pseudo"] ?> </h1>
<p> Pseudo : <?= $_SESSION["user"]["pseudo"] ?> </p>

<?php
//on inclut le footer

include "includes/footer.php";
?>