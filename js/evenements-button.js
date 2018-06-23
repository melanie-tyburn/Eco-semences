$('#Annuler').click(function() {
    if (confirm("Les éléments saisis ne seront pas sauvegardés. Voulez-vous vraiment annuler ?")){
        document.location.href="/php/vues/accueil.php";
    }
});

$('#Enregistrer').click(function() {
    if (confirm("La note de frais ne sera pas soumise. Voulez-vous vraiment enregistrer ?")){
        if($('#libelle').val() != "" && $('#date').val() != "" && $('#montantHT').val() != "" && $('#file').val() != "" && $('#commentaire').val() != ""){
            document.location.href="/php/controleurs/ajout-ndf-bdd.php";
        } else {
             alert("Un ou plusieurs champs requis n'ont pas été remplis !");
        }
    }
});

$('#Soumettre').click(function() {
    if (confirm("Une fois soumise, la note de frais ne pourra plus être modifiée. Voulez-vous vraiment continuer ?")){
        if($('#libelle').val() != "" && $('#date').val() != "" && $('#montantHT').val() != "" && $('#file').val() != "" && $('#commentaire').val() != ""){
            document.location.href="/php/controleurs/ajout-ndf-bdd.php";
        } else {
             alert("Un ou plusieurs champs requis n'ont pas été remplis !");
        }
    }
});
