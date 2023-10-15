<?php 
    $supprime= $_GET['id_emploi_du_temps'];
    $supprimer_emploi_du_temps = $emploi_du_tempsController->supprimer_emploi_du_temps($supprime);;

    if($supprimer_emploi_du_temps == true)
    {
		echo "<script>alert('Emploi du temps supprimé');</script>";
        echo "<script>window.location = 'home.php?information=../../../views/emploi_du_temps/index';</script>";
	}
    else
    {
        echo "<script>alert('Echec de la suppression');</script>";
        echo "<script>window.location = 'home.php?information=../../../views/emploi_du_temps/index';</script>";
    }
    ?>