<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
</head>
<body>
    <?php
        // on definit les constantes d'environnement
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "");
        define("DBNAME", "arcadia_db");

        //DSN  de connexion ( indique la source de données )
        $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;

        // On se connecte à la base de données 
        try{
            // On va instancie PDO
            $db=new PDO($dsn,DBUSER,DBPASS); 
            // on s'assure d'envoyer les données en UTF8 ( pour permettre aux accents de bien s'afficher dans la  base de données )
            $db->exec("SET NAMES utf8");

            // on definit le mode de fetch par défaut 
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

            //echo "on est connecté";

        }catch(PDOException $e){    // le catch est exécuté lorsqu'on a un probleme dans le try 
            die($e->getMessage());

        }
  // on est connecté à la base de données 
  

    ?>
</body>
</html>