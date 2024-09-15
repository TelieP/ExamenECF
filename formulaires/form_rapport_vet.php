<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapport vétérinaire</title>
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

    <h1 class="h1_inscription"> RAPPORT VETERINAIRE </h1>
    <form class="form_rapport_vet"    method="post">
        <fieldset  class="fieldset_form_rap_vet">
            <div>
                <label for="date">Date</label>
                <input type="date" name="date"  id="date">
            </div>
            <div>
                <label for="prenom_animal">Prenom_animal</label>
                <input type="text"  name="prenom_animal" id="prenom_animal">
                <label for="rapport">Rapport</label>
                <textarea id="contenu"></textarea>
            </div>
        </fieldset>
        <button type="submit"> Soumettre </button>
    </form>

</body>
</html>