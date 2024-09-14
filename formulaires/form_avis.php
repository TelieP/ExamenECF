<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avis</title>
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

    <h1 class="h1_inscription"> AJOUTER UN AVIS </h1>
    <form class="form_avis"    method="post">
        <fieldset  class="fieldset_form_avis">
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo"  id="pseudo">
            </div>
            <div>
                <label for="commentaire">Commentaire</label>
                <textarea> </textarea>
            </div>
        </fieldset>
        <button type="submit"> Soumettre </button>
    </form>

</body>
</html>