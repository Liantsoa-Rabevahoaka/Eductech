<?php 
    $suppr = $_GET['id_module'];
    $ok = $moduleController->supprimer_Modules($suppr);
    if($ok==true)
    {
	    echo "<script>window.location = 'home.php?information=../../../views/modules/index'; alert('Module effacé');</script>";
	}
    else
    {
	echo "<script>window.location='home.php?information=../../../views/modules/index'; alert('Echec de suppression');</script>";
    }
    ?>