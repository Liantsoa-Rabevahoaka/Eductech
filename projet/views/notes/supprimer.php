<?php 
    $notesByebye = $_GET['id_note'];
    $resultat = $noteController->delete($notesByebye);
    if($resulat == true)
        {
            echo "<script>window.location = 'home.php?information=../../../views/notes/index'; alert('note effacée');</script>";
        }
    else
        {
                echo "<script>window.location='home.php?information=../../../views/notes/index'; alert('Suppression non éffectuée');</script>";
        }
    ?>