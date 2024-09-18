<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
            <a href="#" class="logo"> ARCADIA  ZOO </a>
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
     <!--formulaire de contact-->
     <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
              <form class="form-horizontal" action="" method="post">
              <fieldset>
                <legend class="text-center">Contactez nous </legend>
        
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Nom</label>
                  <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                  </div>
                </div>
        
                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">Votre E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>
        
                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Votre message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                  </div>
                </div>
        
                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                  </div>
                </div>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
    </div>
     <!--fin formulaire de contact-->