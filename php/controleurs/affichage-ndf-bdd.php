<?php
    include "../modele/connexion.php";
    $reponse = $bdd->query('SELECT date_demande, id_NDF, type_NDF, montant_HT+montant_cinq+montant_dix+montant_vingt AS SOMME, libelle_etat, NoteDeFrais.id_etat
    FROM NoteDeFrais, Employe, EtatNoteDeFrais where NoteDeFrais.matricule = '.$_SESSION["matricule"].' AND NoteDeFrais.id_etat = EtatNoteDeFrais.id_etat');

    while ($donnees = $reponse->fetch()){
        ?>
        <tr>
    		<td> <?php echo $donnees['date_demande'] ?></td>
   			<td> <?php echo $donnees['id_NDF'] ?></td>
   			<td> <?php echo $donnees['type_NDF'] ?></td>
   			<td> <?php echo $donnees['SOMME'] ?></td>
   			<td> <?php echo $donnees['libelle_etat'] ?></td>
   			<td> <?php if ($donnees['libelle_etat']=="enregistre") { echo '<a href="#"> Modifier </a>'; }?> </td>
   			<td><a href="#"> Supprimer </a></td>
  		</tr><?php
    }

?>