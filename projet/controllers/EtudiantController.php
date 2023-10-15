<?php
include_once __DIR__ . ("/../models/M_etudiants.php");
    
    

    class etudiantController
    {
        function create()
            {
                $etudiant = new m_etudiant();  
                $etudiant -> create();
            }

        function read($classe_etudiant)
            {
                $etudiant = new m_etudiant();  
                $data = $etudiant -> read($classe_etudiant);

                return $data;
            }

        public function classe_etudiant()
            {
                $info = new m_etudiant();
                $data = $info->classe_etudiant();

                return $data;
            }
        
        function infoEtudiant($nomUtilisateur_etudiant)
            {
                $info = new m_etudiant();
                $data = $info -> infoEtudiant($nomUtilisateur_etudiant);

                return $data;
            }
        
        function id_etudiantChoisir($id_etudiant)
            {
                $info = new m_etudiant();
                $data = $info -> id_etudiantChoisir($id_etudiant);
                return $data;
            }

        function modifier($id_etudiant)
            {
                $info = new m_etudiant();
                $data = $info -> update($id_etudiant);
                
                return $data;
            }

        function supprimer($etudiantsByebye)
            {
                $info = new m_etudiant();
                $data = $info -> delete($etudiantsByebye);

                return $data;
            }

        function nombre_etudiants()
            {
                $info = new m_etudiant();
                $data = $info -> nombre_etudiants();

                return $data;
            }
            
        }
    ?>