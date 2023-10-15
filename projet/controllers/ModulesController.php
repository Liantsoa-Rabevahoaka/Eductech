<?php

//inclure le contenu du fichier M_Modules.php situé dans le répertoire "models"
include_once __DIR__ . "/../models/M_modules.php";

class modulesController
{   
  

    public function listes_modules()
    {
        $info = new m_modules();
        $data = $info->listes_modules();
        return $data;
    }

    public function listes_modules_by_id($id_module)
    {
        $info = new m_modules();
        $data = $info-> listes_modules_by_id($id_module);
        return $data;
    }

    public function nombre_modules()
    {
        $info = new m_modules();
        $data = $info-> nombre_modules();
        return $data;
    }

    public function ajouter_Modules($id_modules, $nom, $coef, $duree, $id_prof)
    {
        $module = new m_modules();
        $data = $module->ajouter_Modules($id_modules, $nom, $coef, $duree, $id_prof);
        return $data;
    }

    public function modifier_Modules($id_modules, $nom, $coef, $duree, $id_prof)
    {
        $module = new m_modules();
        $data = $module->modifier_Modules($id_modules, $nom, $coef, $duree, $id_prof);
        return $data;
    }

    public function supprimer_Modules($suppr)
    {
        $module = new m_modules();
        $data = $module->supprimer_Modules($suppr);
        return $data;
    }

    public function professeur()
    {
        $info = new  m_modules();
        $data = $info->professeur();
        return $data;    
    }

}
?>