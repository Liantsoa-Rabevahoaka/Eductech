<?php 

    class m_etudiant
        {
        ///CRUD 
            //Ajout d'etudiant
            public function create() 
                     {
                        $nom_etudiant = $_POST['nom_etudiant'];
                        $nomUtilisateur_etudiant = $_POST['nomUtilisateur_etudiant'];
                        $motDePasse_etudiant = md5($_POST['motDePasse_etudiant']);
                        $classe_etudiant = $_POST['classe_etudiant'];
                        $dateDeNaissance_etudiant = $_POST['dateDeNaissance_etudiant'];
                        $adresse_etudiant = $_POST['adresse_etudiant'];
                        $sexe_etudiant = $_POST['sexe_etudiant'];
                        $pere_etudiant = $_POST['pere_etudiant'];
                        $mere_etudiant = $_POST['mere_etudiant'];
                        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                        $dossierDestination = __DIR__ . '/../assets/images/etudiant';
                        $image_etudiant = $_FILES['image']['name'];
                        $cheminFichier = $dossierDestination . $image_etudiant;
                
                        move_uploaded_file($_FILES['image']['tmp_name'], $cheminFichier);
                        }
                    
                        $contactParent_etudiant = $_POST['contactParent_etudiant'];

                        //REQUETE
                        $query = "INSERT INTO etudiants(nom_etudiant, nomUtilisateur_etudiant, motDePasse_etudiant, classe_etudiant, dateDeNaissance_etudiant, adresse_etudiant, sexe_etudiant, pere_etudiant, mere_etudiant, contactParent_etudiant, image_etudiant) VALUES('$nom_etudiant', '$nomUtilisateur_etudiant', '$motDePasse_etudiant', '$classe_etudiant','$dateDeNaissance_etudiant', '$adresse_etudiant', '$sexe_etudiant', '$pere_etudiant', '$mere_etudiant', '$contactParent_etudiant', '$image_etudiant') ";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                            if($resultat == 1)
                            {
                            echo "<script>alert('Etudiant ajouté')</script>";
                                echo "<script>window.location = 'home.php?information=../../../views/etudiants/formCreate';</script>";
                            }
                            else
                            {
                                echo "<script>alert('please call 032 60 282 86');</script>";
                            }
                    }

            //Recuperer la classe des etudiants
             public function classe_etudiant()
                    {
                        $query = "SELECT DISTINCT classe_etudiant FROM etudiants ORDER BY id_etudiant  ASC";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        return $resultat;
                    }

            // Recuperer les lignes de la table étudiants en precisant une condition specifique
            public function read($classe_etudiant)
                    {
                        $query = "SELECT * from etudiants where classe_etudiant = '$classe_etudiant' ORDER BY id_etudiant ASC";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        return $resultat;
                    }

                
            //Mettre a jour les info dans la table etudiant
                    public function update($id_etudiant)
                    {
                        $image_etudiant = $_FILES['image']['name'];     
                                       
                        if(!empty($image_etudiant)){
                            $nom_etudiant = $_POST['nom_etudiant'];
                            $email_etudiant = $_POST['email_etudiant'];
                            $adresse_etudiant = $_POST['adresse_etudiant'];
                            $classe_etudiant = $_POST['classe_etudiant'];
                            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                                $dossierDestination = '../../../assets/images/etudiant';
                                $image_etudiant = $_FILES['image']['name'];
                                $cheminFichier = $dossierDestination . $image_etudiant;
    
                                move_uploaded_file($_FILES['image']['tmp_name'], $cheminFichier);
                                }
                            $sexe_etudiant = $_POST['sexe_etudiant'];
    
                            $contactParent_etudiant = $_POST['contactParent_etudiant'];
    
                        //REQUETE
                        $query = "UPDATE etudiants set nom_etudiant = '$nom_etudiant', email_etudiant = '$email_etudiant', adresse_etudiant = '$adresse_etudiant', classe_etudiant = '$classe_etudiant', sexe_etudiant = '$sexe_etudiant', image_etudiant = '$image_etudiant', contactParent_etudiant = '$contactParent_etudiant' where id_etudiant = '$id_etudiant'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
    
                            if($resultat == 1)
                            {
                                echo "<script>alert('Information étudiant modifié')</script>";
                                echo "<script>window.location = 'home.php?information=../../../views/etudiants/index';</script>";
                            }
                            else
                            {
                                echo "<script>alert('okok');</script>";
                            }
                    } else {
                            $nom_etudiant = $_POST['nom_etudiant'];
                            $email_etudiant = $_POST['email_etudiant'];
                            $adresse_etudiant = $_POST['adresse_etudiant'];
                            $classe_etudiant = $_POST['classe_etudiant'];
                            $sexe_etudiant = $_POST['sexe_etudiant'];
    
                            $contactParent_etudiant = $_POST['contactParent_etudiant'];
    
                        //REQUETE
                        $query = "UPDATE etudiants set nom_etudiant = '$nom_etudiant', email_etudiant = '$email_etudiant', adresse_etudiant = '$adresse_etudiant', classe_etudiant = '$classe_etudiant', sexe_etudiant = '$sexe_etudiant',contactParent_etudiant = '$contactParent_etudiant' where id_etudiant = '$id_etudiant'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
    
                            if($resultat == 1)
                            {
                                echo "<script>alert('Information étudiant modifié')</script>";
                                echo "<script>window.location = 'home.php?information=../../../views/etudiants/index';</script>";
                            }
                            else
                            {
                                echo "<script>alert('okok');</script>";
                            }
                    }
                }
            
            //Supprimer une ligne dans la table etudiants
             public function delete($etudiantsByebye)
                    {
                        $query = " DELETE FROM etudiants WHERE id_etudiant='$etudiantsByebye'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        return $resultat;
                    }
            /////AUTRES FONCTIONS
            public function infoEtudiant($nomUtilisateur_etudiant)
                    {
                        $query = "SELECT * from etudiants where nomUtilisateur_etudiant='$nomUtilisateur_etudiant'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        return $resultat;
                    }
            
            
             public function id_etudiantChoisir($id_etudiant)
                    {
                        $query = "SELECT * from etudiants where id_etudiant='$id_etudiant'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);

                        return $resultat;
                    }   
                    
                // Fonction pour compter le nombre total d'etudiants dans la table
            public function nombre_etudiants()
            {
                $listesetudiantbyid = "SELECT * from etudiants";
                require("connexion.php");
                $listesetudiantbyid_ok = mysqli_query($connexion, $listesetudiantbyid);
                return $listesetudiantbyid_ok;
                                
            }
               
            }
?>