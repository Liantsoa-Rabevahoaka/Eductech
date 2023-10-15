<?php


    class m_professeur
            {
                public function create()
                {
                    $nomComplet_prof = $_POST['nomComplet_prof'];
                    $email_prof = $_POST['email_prof'];
                    $qualification_prof = $_POST['qualification_prof'];
                    $sexe_prof = $_POST['sexe_prof'];
                    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                        $dossierDestination = __DIR__ . '/../assets/images/prof';
                        $image_prof = $_FILES['image']['name'];
                        $cheminFichier = $dossierDestination . $image_prof;
                
                        move_uploaded_file($_FILES['image']['tmp_name'], $cheminFichier);
                        }
                    $contact_prof = $_POST['contact_prof'];
                    
                    $query = "INSERT INTO profs(nomComplet_prof, email_prof, qualification_prof, sexe_prof, image_prof, contact_prof) VALUES ('$nomComplet_prof', '$email_prof', '$qualification_prof', '$sexe_prof', '$image_prof', '$contact_prof')";
                    require("connexion.php");
                    $resultat = mysqli_query($connexion, $query);
                    if($resultat)
                    {
                        echo "<script>alert('Prof ajouté')</script>";
			            echo "<script>window.location = 'home.php?information=../../../views/professeurs/index';</script>";
                    }else{
                        echo "<script>alert('OKOK');</script>";
                    }
                    return $resultat;
                }
            

                public function read()
                    {
                        $query = "SELECT * from profs";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
                        return $resultat;
                    }

                public function update($id_prof)
                    {
                        $image_prof = $_FILES['image']['name'];

                        if(!empty($image_prof)){
                        $nomComplet_prof = $_POST['nomComplet_prof'];
                        $email_prof = $_POST['email_prof'];
                        $qualification_prof = $_POST['qualification_prof'];
                        $sexe_prof = $_POST['sexe_prof'];
                        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                            $dossierDestination = __DIR__ . '/../assets/images/prof';
                            $image_prof = $_FILES['image']['name'];
                            $cheminFichier = $dossierDestination . $image_prof;
                    
                            move_uploaded_file($_FILES['image']['tmp_name'], $cheminFichier);
                            }
                        $contact_prof = $_POST['contact_prof'];
                        
                        $query = "UPDATE profs set nomComplet_prof='$nomComplet_prof', email_prof='$email_prof',qualification_prof = '$qualification_prof', sexe_prof='$sexe_prof', contact_prof = '$contact_prof', image_prof = '$image_prof' where id_prof='$id_prof'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
                        if($resultat)
                        {
                            echo "<script>alert('Information prof modifier')</script>";
                            echo "<script>window.location = 'home.php?information=../../../views/professeur/index';</script>";
                        }else{
                            echo "<script>alert('OKOK');</script>";
                        }
                        return $resultat;

                        } else {
                            $nomComplet_prof = $_POST['nomComplet_prof'];
                            $email_prof = $_POST['email_prof'];
                            $qualification_prof = $_POST['qualification_prof'];
                            $sexe_prof = $_POST['sexe_prof'];
                            $contact_prof = $_POST['contact_prof'];
                            
                            $query = "UPDATE profs set nomComplet_prof = '$nomComplet_prof', email_prof = '$email_prof', qualification_prof = '$qualification_prof', sexe_prof = '$sexe_prof', contact_prof = '$contact_prof'  where id_prof='$id_prof'";
                            require("connexion.php");
                            $resultat = mysqli_query($connexion, $query);
                            if($resultat)
                            {
                                echo "<script>alert('Information prof modifier')</script>";
                                echo "<script>window.location = 'home.php?information=../../../views/professeur/index';</script>";
                            }else{
                                echo "<script>alert('OKOK');</script>";
                            }
                            return $resultat;
                            }
                    }

                public function delete($profByebye)
                    {
                        $query = " DELETE FROM profs WHERE id_prof='$profByebye'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
                        return $resultat;
                    }

                public function id_profChoisir($id_prof)
                    {
                        $query = "SELECT * from profs where id_prof='$id_prof'";
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
                        return $resultat;
                    }

                public function professeur()
                    {
                        $query = "SELECT DISTINCT modules.id_prof, modules.nom, profs.id_prof, profs.nomComplet_prof, profs.email_prof, profs.sexe_prof, profs.image_prof FROM modules JOIN profs on modules.id_prof = profs.id_prof ORDER BY profs.id_prof ASC";                   
                        
                        require("connexion.php");
                        $resultat = mysqli_query($connexion, $query);
                        return $resultat;
                    }
    }	