<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout nouvel animal</title>
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

    <h1 class="h1_inscription"> AJOUT NOUVEL ANIMAL </h1>
    <form class="form_ajout_animal"    method="post">
        <fieldset  class="fieldset_ajout_animal">
            <div>
                <label for="prenom_animall">Prénom</label>
                <input type="text" name="prenom_animall"  id="prenom_animall">
            </div>
            <div>
                <label for="etat">Etat</label>
                <input type="text"  name="etat" id="etat">
            </div>
        </fieldset>
        <button type="submit"> Soumettre </button>
    </form>

</body>
</html>