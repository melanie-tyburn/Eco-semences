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
 </head>
 <body>
   <header>
     <a href="#"><img src="../../images/logo.png" class="logo" alt="logo eco-semences"/></a>
   </header>
   
   <div class="accueil">
   <menu label="Espaces" class="menu-espaces">
   <button type="button" class="menu-button">Espace salarie</button><br/><br/>
   <button type="button" class="menu-button">Espace manager</button><br/><br/>
   <button type="button" class="menu-button">Espace Comptabilite</button>  
  </menu>
  <div class="centre-accueil">
  <section>
  		<aside class="recherche" id="recherche"> 
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
  		<button>Toutes</button>
  		<button>Enregitrees</button>
  		<button>Soumises</button>
          <select id="tri" name="tri">
            <option name="date-demande" value="date-demande">Date Demande</option> 
          </select>
  		</aside>
  		
  		<br/>
  		<br/>
  			<table>
  			
  				<tr>
    				<td>Date demande</td>
   					<td>ID</td>
   					<td>Libelle</td>
   					<td>Prix TTC</td>
   					<td>Statut</td>
   					<td></td>
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
  		<aside id="nouvelle-ndf-btn">
  			<a href="creation-note-de-frais.php">Nouvelle note de frais</a>
  		</aside>
  </section>
  </div>
  </div>
 </body>