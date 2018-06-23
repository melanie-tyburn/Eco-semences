<?php
    session_start();
    include "../modele/connexion.php";
    // variables recuperees du formulaire de creation de note de frais
    $date_ndf = $_POST['date'];
    $date_demande = date("d-m-Y");
    $type = $_POST['type'];
    $commentaire = $_POST['textarea'];
    $montantHT = $_POST['montantHT'];
    $tva_cinq = $_POST['tva-cinq'];
    $tva_dix = $_POST['tva-dix'];
    $tva_vingt = $_POST['tva-vingt'];
    $img_blob = file_get_contents($_FILES['file']['tmp_name']);
    $matricule = $_SESSION['matricule'];
    if(isset($_POST['Soumettre'])){
        $etat = 2;
    } else {
        $etat = 1;
    }
    $insert = $bdd->prepare("INSERT INTO NoteDeFrais (id_NDF, date_ndf, date_demande, type_NDF, commentaire, montant_HT, montant_cinq, montant_dix, montant_vingt, id_etat, matricule, justificatif) 
    VALUES (0, :date_ndf, :date_dem, :type, :comm, :mht, :tva5, :tva10, :tva20, :etat, :matricule, :justif)");
    $insert->bindParam(':date_ndf', $date_ndf);
    $insert->bindParam(':date_dem', $date_demande);
    $insert->bindParam(':type', $type);
    $insert->bindParam(':comm', $commentaire);
    $insert->bindParam(':mht', $montantHT);
    $insert->bindParam(':tva5', $tva_cinq);
    $insert->bindParam(':tva10', $tva_dix);
    $insert->bindParam(':tva20', $tva_vingt);
    $insert->bindParam(':etat', $etat);
    $insert->bindParam(':matricule', $matricule);
    $insert->bindParam(':justif', $img_blob);

    $insert->execute();
    // print_r($insert->errorInfo());
    $url_page_accueil = '../vues/accueil.php';
    header('Location:'.$url_page_accueil);
?>