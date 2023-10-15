<?php
    include_once __DIR__ . ("/../models/M_Professeurs.php");

    class profController
        {
            public function insert()
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> create();
                     
                    return $resultat;
                }

            public function listeProf()
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> read();

                    return $resultat;
                }

            public function modifier($id_prof)
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> update($id_prof);

                    return $resultat;
                }

            public function delete($profByebye)
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> delete($profByebye);

                    return $resultat;
                }

            public function id_profChoisir($id_prof)
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> id_profChoisir($id_prof);
                    return $resultat;
                }

            public function professeur()
                {
                    $prof = new m_professeur;
                    $resultat = $prof -> professeur();

                    return $resultat;
                }
        }
    