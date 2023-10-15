<?php

include_once __DIR__ . "/../models/M_Emploi_du_temps.php";


class emploi_du_temps_controller
{   
  
   	//Affiche les emplois du temps, utilisé dans index.php
    public function listes_emploi_du_temps($niveau)
    {
        $info = new m_emploi_du_temps();
        $data = $info->listes_emploi_du_temps($niveau);
        return $data;
    }

    //Prend l'id_emploi_du_temps, utilisé dans formEdit.php pour la modification
    public function listes_emploi_du_temps_by_id($id_emploi_du_temps)
    {
        $info = new m_emploi_du_temps();
        $data = $info-> listes_emploi_du_temps_by_id($id_emploi_du_temps);
        return $data;
    }

	//Ajoute les caractéristiques de la base de donne "emploi_du_temps", utilisé dans formCreate.php
    public function ajouter_emploi_du_temps($id_emploi_du_temps, $start_time, $end_time, $niveau, $date)
    {
        $info = new m_emploi_du_temps();
        $data = $info->ajouter_emploi_du_temps($id_emploi_du_temps, $start_time, $end_time, $niveau, $date);
        return $data;
    }

	//Ajoute les caractéristiques de la base de donne "emploi_du_temps_des_modules", utilisé dans formCreate.php
    public function ajouter_emploi_du_temps_des_modules($id_emploi_du_temps, $id_module)
    {
        $info = new m_emploi_du_temps();
        $data = $info->ajouter_emploi_du_temps_des_modules($id_emploi_du_temps, $id_module);
        return $data;
    }

	//Modifie l'emploi du temps, utilisé dans formEdit.php
    public function modifier_emploi_du_temps($modifier_date, $modifier_start_time, $modifier_end_time, $id_emploi_du_temps)
    {
        $info = new m_emploi_du_temps();
        $data = $info->modifier_emploi_du_temps($modifier_date, $modifier_start_time, $modifier_end_time, $id_emploi_du_temps);
        return $data;
    }

	//Supprime l'emploi du temps, utilisé dans supprimer.php
    public function supprimer_emploi_du_temps($supprime)
    {
        $info = new m_emploi_du_temps();
        $data = $info->supprimer_emploi_du_temps($supprime);
        return $data;
    }

	//Permet de choisir le niveau desiré, utilisé dans index.php
    public function niveau()
    {
        $info = new m_emploi_du_temps();
        $data = $info->niveau();
        return $data;    
    }

	//Permet d'inclure les modules, utilisé dans formCreate.php
    public function module()
    {
        $info = new m_emploi_du_temps();
        $data = $info->module();
        return $data;    
    }

	//Permet de compter le nombre d'emploi du temps
    public function nombre_emploi_du_temps()
    {
        $info = new m_emploi_du_temps();
        $data = $info->nombre_emploi_du_temps();
        return $data;    
    }

}