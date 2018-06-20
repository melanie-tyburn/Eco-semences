<!doctype html>
<html lang="fr-FR">
 <head>
  <title>Connexion</title>
    <!-- Bootstrap core CSS -->
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="../../css/style.css" rel="stylesheet">
    <!-- Responsive styles CSS -->
	<link href="../../css/responsive.css" rel="stylesheet">
    <!-- Icône des onglets -->
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
 </head>
 <body>
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Connectez-vous</h2>
        <label for="inputEmail" class="sr-only">Adresse e-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <a href="#">  Mot de passe oublie ? </a>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <a href="php/vues/creation-note-de-frais.php"> Creer une note de frais</a>
 </body>
 </html>