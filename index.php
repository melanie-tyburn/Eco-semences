<!doctype html>
<html lang="fr-FR">
 <head>
  <title>Connexion</title>
    <!-- Bootstrap core CSS -->
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="css/style.css" rel="stylesheet">
    <!-- Responsive styles CSS -->
	<link href="css/responsive.css" rel="stylesheet">
    <!-- Icoe des onglets -->
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
 </head>
 <body>
    <header>
      <a href="#"><img src="../../images/logo.png" class="logo" alt="logo eco-semences"/></a>
      <h2 class="title">Se connecter</h2>
    </header>
    <div class="container">
      <form id="login-form">
        <div class="centre-login">
        <center>
          <label for="matricule">Matricule </label>
          <input type="text" id="matricule" placeholder="Ex : 012854" required autofocus/>
          <br/><br/>
          <label for="password">Mot de passe </label>
          <input type="password" id="password" placeholder="Mot de passe" required />
          <br/><br/>
          <label for="se-souvenir" class="label-long"> Se souvenir de moi </label>
          <input type="checkbox" id="se-souvenir" value="remember-me">  
          <br/><br/>   
           <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
           <br/>
           <a href="#"> <i>Mot de passe oublie ?</i> </a></center>
        </div>
      </form>

    </div> <!-- /container -->
 </body>
 </html>