
<?php

class m_modules
{
	 // Fonction pour récupérer la liste de tous les modules
    public function listes_modules()
	{
		// $listesmodules = "SELECT * from modules ORDER BY id_module ASC";
		$listesmodules  = "SELECT DISTINCT modules.id_prof, modules.id_module, modules.nom, modules.coef, modules.duree, profs.id_prof, profs.nomComplet_prof FROM profs JOIN modules on profs.id_prof = modules.id_prof";
        require("connexion.php");
		$listesmodules_ok = mysqli_query($connexion, $listesmodules);
		return $listesmodules_ok;
	}

	// Fonction pour récupérer les informations d'un module spécifique en fonction de son ID
    public function listes_modules_by_id($id_module)
	{
		$listesmodulesbyid = "SELECT * from modules where id_module='$id_module'";
        require("connexion.php");
		$listesmodulesbyid_ok = mysqli_query($connexion, $listesmodulesbyid);
		return $listesmodulesbyid_ok;
    
	}

	 // Fonction pour compter le nombre total de modules dans la table
    public function nombre_modules()
	{
		$listesmodulesbyid = "SELECT * from modules";
        require("connexion.php");
		$listesmodulesbyid_ok = mysqli_query($connexion, $listesmodulesbyid);
		return $listesmodulesbyid_ok;
    
	}

	// Fonction pour ajouter un nouveau module à la table
    public function ajouter_Modules($id_module, $nom, $coef, $duree, $id_prof) {
        $ajout = "INSERT INTO modules (id_module, nom, coef, duree, id_prof) VALUES ('$id_module', '$nom', '$coef', '$duree', '$id_prof')";
        require("connexion.php");
        $inserer_module =  mysqli_query($connexion, $ajout);
		return $inserer_module;
    }

	// Fonction pour modifier les informations d'un module existant dans la table
    public function modifier_Modules($id_module, $nom, $coef, $duree, $id_prof) {
        $modif = "UPDATE modules SET nom = '$nom', coef = '$coef', duree = '$duree', id_prof = '$id_prof' WHERE id_module = '$id_module'";
        require("connexion.php");
        $modifier_module =  mysqli_query($connexion, $modif);
        return  $modifier_module;
    }
	
	// Fonction pour supprimer un module de la table en fonction de son ID
	public function supprimer_Modules($suppr)
	{
	$supprimer = " DELETE FROM modules WHERE id_module='$suppr'";
     require("connexion.php");
    $supprimer_module= mysqli_query($connexion, $supprimer);
	return $supprimer_module;
	}   

	//Fonction pour recuperer quelques informations dans la table profs et la table modules en utilisant une jointure
	public function professeur()
    {
        $prof = "SELECT DISTINCT modules.id_prof, profs.id_prof, profs.nomComplet_prof FROM modules JOIN profs on modules.id_prof = profs.id_prof";
		// $prof = "SELECT DISTINCT nomComplet_prof from profs";
		require("connexion.php");
        $profOk = mysqli_query($connexion, $prof);
		return $profOk;
    }
}
?>