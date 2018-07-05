<!doctype html>
<html lang="fr-FR">
 <head>
    <title> Page d'accueil </title>
    	<!-- Bootstrap core CSS -->
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="../../css/style.css" rel="stylesheet">
    <!-- Responsive styles CSS -->
	<link href="../../css/responsive.css" rel="stylesheet">
    <!-- Icone des onglets -->
    <link rel="shortcut icon" href="../../images/logo.png">

	<meta charset="utf-8" />
 </head>
 <body>
   <header>
     <a href="accueil.php"><img src="../../images/logo.png" class="logo" alt="logo eco-semences"/></a>
   </header>
   
   <div class="accueil">
   <menu label="Espaces" class="menu-espaces">
   <button type="button" class="menu-button">Espace salarié</button><br/><br/>
   <button type="button" class="menu-button" disabled>Espace manager</button><br/><br/>
   <button type="button" class="menu-button" disabled>Espace comptabilité</button>  
  </menu>
  <div class="centre-accueil">
  <section>
  		<aside class="recherche" id="recherche" class="recherche"> 
  			<form role="search">
  				<div class="search-control">
  					<input type="search" id="site-search" name="search"
  						placeholder="Rechercher ..."/>
  					<button>OK</button>
  				</div>
  		</aside>
  		<br/><br/>
  		
  		<aside id="resultats">
  		
  		<aside id="filtres">
  		<button class="btn-tab">Toutes</button>
  		<button class="btn-tab">Enregistrées</button>
  		<button class="btn-tab">Soumises</button>
          <select id="tri" name="tri" class="tri">
            <option name="date-demande" value="date-demande">Date demande croissante</option> 
			<option name="date-demande" value="date-demande">Date Demande décroissante</option>
			<option name="date-demande" value="date-demande">ID</option> 
			<option name="date-demande" value="date-demande">Libelle</option> 
			<option name="date-demande" value="date-demande">Prix croissant</option>  
			<option name="date-demande" value="date-demande">Prix décroissant</option> 
			<option name="date-demande" value="date-demande">Statut</option> 
          </select>
  		</aside>
  		<br/>
  		<br/>
  			<table>
  			
  				<tr>
    				<td>Date demande</td>
   					<td>ID</td>
   					<td>Libellé</td>
   					<td>Prix TTC</td>
   					<td>Statut</td>
   					<td></td>
   					<td></td>
  				</tr>
  				<tr>
    				<td>17/07/2005</td>
   					<td>012164</td>
   					<td>Réunion Berlin</td>
   					<td>1500,00</td>
   					<td>Enregistre</td>
   					<td><a href="#">Modifier</a></td>
   					<td><a href="#">Supprimer</a></td>
   					<td></td>
  				</tr>
  				<tr>
    				<td>17/07/2005</td>
   					<td>012164</td>
   					<td>Reunion Berlin</td>
   					<td>1500,00</td>
   					<td>Enregistre</td>
   					<td><a href="#">Modifier</a></td>
   					<td><a href="#">Supprimer</a></td>
   					<td></td>
  				</tr>
  				<tr>
    				<td>17/07/2005</td>
   					<td>012164</td>
   					<td>Reunion Berlin</td>
   					<td>1500,00</td>
   					<td>Enregistre</td>
   					<td><a href="#">Modifier</a></td>
   					<td><a href="#">Supprimer</a></td>
   					<td></td>
  				</tr>
  				<tr>
    				<td>17/07/2005</td>
   					<td>012164</td>
   					<td>Reunion Berlin</td>
   					<td>1500,00</td>
   					<td>Enregistre</td>
   					<td><a href="#">Modifier</a></td>
   					<td><a href="#">Supprimer</a></td>
   					<td></td>
  				</tr>
  				<tr>
    				<td>17/07/2005</td>
   					<td>012164</td>
   					<td>Reunion Berlin</td>
   					<td>1500,00</td>
   					<td>Enregistre</td>
   					<td><a href="#">Modifier</a></td>
   					<td><a href="#">Supprimer</a></td>
   					<td></td>
  				</tr>
			</table>
  		</aside>
  		<br/> <br/>
		<center>
  		<aside id="nouvelle-ndf-btn">
  			<a href="creation-note-de-frais.php">Nouvelle note de frais</a>
  		</aside>
		</center>
  </section>
  </div>
  </div>
 </body>