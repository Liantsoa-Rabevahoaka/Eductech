<?php 
    $etudiantsByebye = $_GET['id_etudiant'];
    $ok = $etudiantController -> supprimer($etudiantsByebye);
    if($ok==true)
        {
            echo "<script>window.location='home.php?information=../../../views/etudiantss/index'; alert('Etudiant éffacé');</script>";
        }
    else
        {
            echo "<script>window.location='home.php?teacher=teacher-delete'; alert('Erreur);</script>";
        }
    ?>