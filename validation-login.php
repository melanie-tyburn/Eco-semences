<?php include "php/modele/connexion.php" ?>
<?php
  //si la session existe (si l'utilisateur est déjà connecté), on le redirige directement vers la page d'accueil
  //sinon si la section n'existe pas, on check si les données du formulaire sont remplies ET si elles correspondent à la BDD
  $url_page_accueil = 'php/vues/accueil.php';
  $url_login = 'index.php';
  if(isset($_SESSION['matricule'])){
      header('Location:'.$url_page_accueil);
  } else {
    if ($_POST['matricule'] != '' && $_POST['password'] != '') {
        $query=$bdd->prepare('SELECT * FROM employe WHERE matricule = :matricule');
        $query->bindValue(':matricule',$_POST['matricule'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
	    if ($data['mot_de_passe'] == $_POST['password']) {
            session_start();
	        $_SESSION['matricule'] = $data['matricule'];
            header('Location:'.$url_page_accueil);
        } else {
            header('Location:'.$url_login);
        }
    }
  }

 ?>