<?php


class m_emploi_du_temps
{      

	//Affiche les emplois du temps, utilisé dans index.php
	public function listes_emploi_du_temps($niveau)
	{
		$listes_emploi_du_temps =" SELECT e.id_emploi_du_temps, e.start_time, e.end_time, e.date, m.nom, e.niveau AS nom_module, m.nom AS nom_module2
		FROM emploi_du_temps AS e
		INNER JOIN emploi_du_temps_des_modules AS et ON e.id_emploi_du_temps = et.id_emploi_du_temps
		INNER JOIN modules AS m ON et.id_module = m.id_module
		WHERE e.niveau = '$niveau'
		ORDER BY e.date ASC, e.start_time ASC";

		require("connexion.php");
		$listes_emploi_du_temps_ok = mysqli_query($connexion, $listes_emploi_du_temps);

		if ($listes_emploi_du_temps_ok) {
			return $listes_emploi_du_temps_ok;// Retourner le résultat de la requête directement
		} else {
			return [];
		}

	
	}

	//Prend l'id_emploi_du_temps, utilisé dans formEdit.php pour la modification
	public function listes_emploi_du_temps_by_id($id_emploi_du_temps)
	{
		$listes_emploi_du_temps_by_id = "SELECT * from emploi_du_temps where id_emploi_du_temps='$id_emploi_du_temps'";
		require("connexion.php");
		$listes_emploi_du_temps_by_id_ok = mysqli_query($connexion, $listes_emploi_du_temps_by_id);
		return $listes_emploi_du_temps_by_id_ok;
	}
	
	//Ajoute les caractéristiques de la base de donne "emploi_du_temps", utilisé dans formCreate.php
	public function ajouter_emploi_du_temps($id_emploi_du_temps, $start_time, $end_time, $niveau, $date)
	{
        $ajouter_emploi_du_temps = "INSERT INTO emploi_du_temps(id_emploi_du_temps, start_time, end_time, niveau, date) values ('$id_emploi_du_temps', '$start_time', '$end_time', '$niveau', '$date')";
		require("connexion.php");
		$ajouter_emploi_du_temps_ok = mysqli_query($connexion, $ajouter_emploi_du_temps);
		return $ajouter_emploi_du_temps_ok;
	}

	//Ajoute les caractéristiques de la base de donne "emploi_du_temps_des_modules", utilisé dans formCreate.php
	public function ajouter_emploi_du_temps_des_modules($id_emploi_du_temps, $id_module)
	{
        $ajouter_emploi_du_temps = "INSERT INTO emploi_du_temps_des_modules(id_emploi_du_temps, id_module) values ('$id_emploi_du_temps', '$id_module')";
		require("connexion.php");
		$ajouter_emploi_du_temps_ok = mysqli_query($connexion, $ajouter_emploi_du_temps);
		return $ajouter_emploi_du_temps_ok;
	}

	//Modifie l'emploi du temps, utilisé dans formEdit.php
	public function modifier_emploi_du_temps($modifier_date, $modifier_start_time, $modifier_end_time, $id_emploi_du_temps)
	{
		$modifier_emploi_du_temps = "UPDATE emploi_du_temps set date = '$modifier_date', start_time = '$modifier_start_time', end_time = '$modifier_end_time' where id_emploi_du_temps = '$id_emploi_du_temps'";
		require("connexion.php");
        $modifier_emploi_du_temps_ok = mysqli_query($connexion, $modifier_emploi_du_temps);
		return $modifier_emploi_du_temps_ok;
	}

	//Supprime l'emploi du temps, utilisé dans supprimer.php
    public function supprimer_emploi_du_temps($supprime)
	{
        $supprimer_emploi_du_temps = " DELETE FROM emploi_du_temps where id_emploi_du_temps='$supprime'";
		require("connexion.php");
        $supprimer_emploi_du_temps_ok = mysqli_query($connexion, $supprimer_emploi_du_temps);
		return $supprimer_emploi_du_temps_ok;
	}

	//Permet de choisir le niveau desiré, utilisé dans index.php
	public function niveau()
    {
        $niveau = "SELECT DISTINCT niveau FROM emploi_du_temps";
		require("connexion.php");
        $niveau_ok = mysqli_query($connexion, $niveau);
		return $niveau_ok;
    }

	//Permet d'inclure les modules, utilisé dans formCreate.php
	public function module()
    {
        $module = "SELECT DISTINCT emploi_du_temps_des_modules.id_module,modules.id_module, modules.nom FROM emploi_du_temps_des_modules JOIN modules on emploi_du_temps_des_modules.id_module = modules.id_module";
		require("connexion.php");
        $module_ok = mysqli_query($connexion, $module);
		return $module_ok;
    }

	//Compter le nombre total d'emploi du temps
	public function nombre_emploi_du_temps()
	{
		$emploi_du_temps = "SELECT * from emploi_du_temps";
		require("connexion.php");
		$nb_emploi_du_temps = mysqli_query($connexion,$emploi_du_temps);
		return $nb_emploi_du_temps;
	}

}	

