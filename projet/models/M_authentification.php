<?php 
   //Classe concernant l'authentification de l'administrateur
    class m_authAdmin
        {
            ///CRUDDD
                //Ajoute les caractéristiques de la base de donne "meadmin", utilisé dans formCreate.php
                public function create()
                    {   
                        //récupérer les donnéees du formulaire de création
                        $nom_admin = $_POST['nom_admin'];
                        $email_admin = $_POST['email_admin'];
                        $nomUtilisateur_admin = $_POST['nomUtilisateur_admin'];
                        $motDePasse_admin = md5($_POST['motDePasse_admin']);
                        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                            $dossierDestination = __DIR__ . '/../assets/images/admin';
                            $image_admin = $_FILES['image']['name'];
                            $cheminFichier = $dossierDestination . $image_admin;

                            move_uploaded_file($_FILES['image']['tmp_name'], $cheminFichier);
                            }
                        
                        $query = "INSERT INTO meadmin(nom_admin,email_admin,nomUtilisateur_admin,motDePasse_admin,image_admin) VALUES ('$nom_admin','$email_admin','$nomUtilisateur_admin','$motDePasse_admin','$image_admin')";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        if($resultat == 1)
                        {
                            echo "<script>alert('Bienvenue nouveau admin')</script>";
                            header("location: ./index.php");
                        }
                        else
                        {
                            echo "<script>alert('Erreur lors du développement, appelez les developpeurs.');</script>";
                        }
                    }

                // Affiche la liste d'admin
                public function read($nomUtilisateur_admin)
                    {
                        $query = "SELECT * FROM meadmin WHERE nomUtilisateur_admin='$nomUtilisateur_admin'";#
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
        
                        return $resultat;
        
                    }

                //Modfier les données de l'admin
                 public function update()
                    {
                        $motDePasse_admin = $_POST['motDePasseAdmin_nouveau'];
                        
                        if(!empty($motDePasse_admin)){
                            $nom_admin = $_POST['nom_admin'];
                            $email_admin = $_POST['email_admin'];  
                            $nomUtilisateur_admin = $_POST['nomUtilisateurAdmin_nouveau'];
                            $motDePasse_admin = md5($_POST['motDePasseAdmin_nouveau']);

                            $query = "UPDATE meadmin set nom_admin='$nom_admin', email_admin='$email_admin', motDePasse_admin='$motDePasse_admin', nomUtilisateur_admin='$nomUtilisateur_admin'";
                            require("connexion.php");
                            $resultat = mysqli_query($connexion, $query);
                            if($resultat)
                                {
                                echo "<script>alert('Modification réussi');</script>";
                                echo "<script>window.location='./index.php';</script>";
                                }else{
                                    echo "<script>alert('Erreur lors de la connexion à la base de données' . mysqli_connect_error());</script>";
                                }
                        }else{
                            $nom_admin = $_POST['nom_admin'];
                            $email_admin = $_POST['email_admin'];  
                            $nomUtilisateur_admin = $_POST['nomUtilisateurAdmin_nouveau'];

                            $query = "UPDATE meadmin set nom_admin='$nom_admin', email_admin='$email_admin', nomUtilisateur_admin='$nomUtilisateur_admin'";
                            require("connexion.php");
                            $resultat = mysqli_query($connexion, $query);
                            if($resultat)
                                {
                                echo "<script>alert('Modification réussi');</script>";
                                echo "<script>window.location='./index.php';</script>";
                                }else{
                                    echo "<script>alert('Erreur lors de la connexion à la base de données' . mysqli_connect_error());</script>";
                                }
                        }
                    }
            
            
            ///AUTRES FONCTIONS
                //fonction concernant la connexion en tant qu'administrateur
               public  function login()
                {
                    $nomUtilisateur_admin = $_POST['nomUtilisateur_admin'];
                    $motDePasse_admin = md5($_POST['motDePasse_admin']); //////////md5

                    $query = "SELECT * FROM meadmin WHERE nomUtilisateur_admin='$nomUtilisateur_admin' AND motDePasse_admin='$motDePasse_admin'";
                    require("connexion.php");
                    $resultat = mysqli_query($connexion, $query);

                    if(mysqli_fetch_assoc($resultat)){
                        // Rediriger vers la session_start();
                        $_SESSION['meadmin'] = $nomUtilisateur_admin;
                        header("location: ./home.php");
                    } else {
                        // Afficher un message d'erreur si la connexion échoue
                        echo "<script>alert('Utilisateur non reconnu');</script>";
                    }   
                }
            

                //
                public function select()
                    {
                        $nomUtilisateur_admin = $_POST['nomUtilisateurAdmin_actuel'];
                        $motDePasse_admin = md5($_POST['motDePasseAdmin_actuel']); ////////md5

                        $query = "SELECT * FROM meadmin WHERE nomUtilisateur_admin='$nomUtilisateur_admin' AND motDePasse_admin='$motDePasse_admin'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        if(mysqli_fetch_assoc($resultat))
                        {
                            echo "<script>window.location = 'home.php?information=../../../views/authentification/admin/formEdit'; alert('Nom et mot de passe correcte');</script>";
                        
                        } else {
                            echo "<script>alert('Ancien Nom Utilisateur / Mot de passe non correct');</script>";
                        }   
                    }


        }
    //Classe concernant l'authentification en tant qu'etudiant
    class m_authEtudiant
        {   
            //connexion en tant qu'etudiant
            public function login()
            {
                $nomUtilisateur_etudiant = $_POST['nomUtilisateur_etudiant'];
                $motDePasse_etudiant = md5($_POST['motDePasse_etudiant']);
    
                        $query = "SELECT * FROM etudiants WHERE nomUtilisateur_etudiant='$nomUtilisateur_etudiant' AND motDePasse_etudiant='$motDePasse_etudiant'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        if(mysqli_fetch_assoc($resultat)){
                            // Rediriger vers la session_start();
                            $_SESSION['etudiant'] = $nomUtilisateur_etudiant;
                            header("location: ./home.php");
                        } else {
                            // Afficher un message d'erreur si la connexion échoue
                            echo "<script>alert('Utilisateur non reconnu');</script>";
                        }
             
            }

                
        }
?>