<!DOCTYPE html>
<html lang="en">
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

</body>
</html>