<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    // on supprime une variable
    unset($_SESSION["user"]);
    header("Location:index.php");
    ?>
    
</body>
</html>