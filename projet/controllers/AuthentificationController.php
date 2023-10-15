<?php
    include_once __DIR__ . ("/../models/M_authentification.php");
    
    class adminController
        {
            /////CRUDDDDDD
            function create()
                {
                    $authAdmin = new m_authAdmin();  
                    $admin = $authAdmin -> create();

                    return $admin;
                }


            function read($nomUtilisateur_admin)
                {
                    $authAdmin = new m_authAdmin();  
                    $admin = $authAdmin -> read($nomUtilisateur_admin);

                    return $admin;
                }


            function update()
                {
                    $authAdmin = new m_authAdmin();  
                    $admin = $authAdmin -> update();

                    return $admin;
                }

            ////AUTRES FONCTIONS
            
            function login()
            {
                $authAdmin = new m_authAdmin();  
                $admin = $authAdmin -> login();

                return $admin;
            }
            

            function select()
            {
                $authAdmin = new m_authAdmin();  
                $admin = $authAdmin -> select();

                return $admin;
            }
        }


    class Auth_etudiantController
        {
            function login()
            {

                $authEtudiant = new m_authEtudiant();  
                $resultat = $authEtudiant -> login();

                return $resultat;

            }

        }


?>