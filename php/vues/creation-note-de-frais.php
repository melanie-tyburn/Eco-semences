 <?php
	session_start();
 ?>
<!doctype html>
<html lang="fr-FR">
 <head>
    <title> Creation note de frais </title>
    	<!-- Bootstrap core CSS -->
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="../../css/style.css" rel="stylesheet">
    <!-- Responsive styles CSS -->
	<link href="../../css/responsive.css" rel="stylesheet">
    <!-- Icône des onglets -->
    <link rel="shortcut icon" href="../../images/logo.png">

 </head>
 <body>
   <header>
     <a href="accueil.php"><img src="../../images/logo.png" class="logo" alt="logo eco-semences"/></a>
     <h2 class="title"> Nouvelle note de frais</h2>
   </header>
   <form enctype="multipart/form-data" id="creation-note" class="class-creation-note" method="POST" action="../controleurs/ajout-ndf-bdd.php">
      <div class="centre">
        <div class="champs-gauche">

        <div class="champ">
              <label for="libelle">Libelle*</label>
              <input type="text" id="libelle" name="libelle" required autofocus/>
        </div>

        <div class="champ">
          <label for="date">Date* </label>
          <input type="date" id="date" name="date" required/>
        </div>

        <div class="champ">
          <label for="type">Type </label>
          <select id="type-note" name="type">
            <option name="restaurant" value="restaurant">Restaurant</option> 
            <option name="trajet-voiture" value="trajet-voiture">Trajet en voiture</option> 
            <option name="hotel" value="hotel">Hotel</option> 
          </select>
        </div>

          <div class="champ">
          <label for="montantHT">Montant HT* </label>     
          <input type="number" name="montantHT" id="ht" value="0" step="0.01" required/>
          </div>

          <div class="champ">
          <label for="tva">TVA 5,5%</label>
          <input type="number" name="tva-cinq" id="tva-cinq" value="0" step="0.01" placeholder="5,5%"/>
          <label for="tva">10%</label>
          <input type="number" name="tva-dix" id="tva-dix" value="0" step="0.01" placeholder="10%"/>
          <label for="tva">20%</label>
          <input type="number" name="tva-vingt"id="tva-vingt" value="0" step="0.01" placeholder="20%"/>
          </div>

          <div class="champ">
          <label for="ttc"> Montant TTC </label>
          <input type="number" name="ttc" id="ttc" step="0.01" disabled/>
          </div>

          <div class="champ">
          <label for="file"> Justificatif* </label>
            <input id="file" name="file" class="input-file" type="file" required>
          </div>
     </div>     
  
    <div class="champs-droite">

       <div class="champ">
        <label for="commentaire">Commentaire* </label>
        <br/><br/> <br/>    
        <textarea id="commentaire" name="textarea" rows="16" cols="60" placeholder=" Mettez ici vos remarques..." required></textarea>
       </div>
       
     </div>
     </div>

     <br/>
      <div class="champs-bas">
        <button id="Annuler" value="Annuler" class="btn btn-lg btn-primary button" type="reset">Annuler</button>
        <button id="Enregistrer" name="Enregistrer" value="Enregistrer" class="btn btn-lg btn-primary button" type="submit">Enregistrer</button>
        <button id="Soumettre" name="Soumettre" value="Soumettre" class="btn btn-lg btn-primary button" type="submit">Soumettre</button>
     </div>
   </form>
   <br/><br/>
   
 <!-- AJOUT JQUERY POUR SCRIPTS -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- calcul montant ttc -->
    <script src="../../js/calcul-montant-ttc.js"></script>
    <!-- evenements boutons 'annuler', 'enregistrer', 'soumettre' -->
    <script src="../../js/evenements-button.js"></script>
 </body>
 </html>