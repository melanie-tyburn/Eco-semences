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
     <a href="#"><img src="../../images/logo.png" class="logo" alt="logo eco-semences"/></a>
     <h2 class="title"> Nouvelle note de frais</h2>
   </header>
   <form id="creation-note" class="class-creation-note">
      <div class="centre">
        <div class="champs-gauche">

        <div class="champ">
              <label for="libelle">Libelle</label>
              <input type="text" id="libelle" required autofocus/>
        </div>

        <div class="champ">
          <label for="date">Date </label>
          <input type="date" id="date" required/>
        </div>

        <div class="champ">
          <label for="type">Type </label>
          <select id="type-note">
            <option value="restaurant">Restaurant</option> 
          </select>
        </div>

          <div class="champ">
          <label for="montantHT">Montant HT </label>     
          <input type="number" id="ht" required/>
          </div>

          <div class="champ">
          <label for="tva">TVA </label>
          <input type="number" id="tva-cinq" placeholder="5,5%"/>
          <input type="number" id="tva-dix" placeholder="10%"/>
          <input type="number" id="tva-vingt" placeholder="20%"/>
          </div>

          <div class="champ">
          <label for="ttc"> Montant TTC </label>
          <input type="number" id="ttc" disabled/>
          </div>

          <div class="champ">
            <input id="file" class="input-file" type="file" required>
          </div>

     </div>
     
  
    <div class="champs-droite">

       <div class="champ">
        <label for="commentaire">Commentaire </label>
        <br/><br/> <br/>    
        <textarea name="textarea" rows="16" cols="60" placeholder=" Mettez ici vos remarques..." required></textarea>
       </div>
       
     </div>
     </div>

     <br/>
      <div class="champs-bas">
        <button id="Annuler" value="Annuler" class="btn btn-lg btn-primary button" type="reset">Annuler</button>
        <button id="Enregistrer" value="Enregistrer" class="btn btn-lg btn-primary button" type="submit">Enregistrer</button>
        <button id="Soumettrer" value="Soumettre" class="btn btn-lg btn-primary button" type="submit">Soumettre</button>
     </div>
   </form>
   <br/><br/>
 </body>