<?php 

 class m_note
    {
    //CRUD
        //Ajout de note
        public function create()
            {
                $examen = $_POST['examen'];
                $id_etudiant = $_POST['id_etudiant'];
                $id_module = $_POST['module'];
                $valeur_note = $_POST['valeur_note'];
           
                if($valeur_note<10){
                   $appreciation = "faible";
                }else if($valeur_note<12){
                   $appreciation = "passable";
                }else if($valeur_note<14){
                   $appreciation = "Assez-bien";
                }else if($valeur_note<16){
                   $appreciation = "Bien";
                }else if($valeur_note<=20){
                   $appreciation = "Très-bien";
               }else{
                   $appreciation = "incorrect";
               }
                
           
                    $query = "INSERT INTO notes(examen,valeur_note,appreciation,id_etudiant,id_module) VALUES ('$examen', '$valeur_note','$appreciation','$id_etudiant','$id_module')";
                    require("connexion.php");
                    $resultat = mysqli_query($connexion, $query);
    
                    if($resultat == 1)
                    {
                       echo "<script>alert('note ajoutée')</script>";
                        echo "<script>window.location = 'home.php?information=../../../views/notes/index';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Contactez le developpeur');</script>";
                    }
            }
        
            //Recuperer des info dans les tables: etudiants, notes et modules en utilisant la jointure
        public function read($classe, $examen, $module)
            {
                $query = "SELECT  notes.id_note, notes.examen, notes.id_etudiant, etudiants.classe_etudiant, etudiants.nom_etudiant, notes.valeur_note,  modules.nom, notes.appreciation, modules.coef  FROM notes JOIN etudiants ON  notes.id_etudiant = etudiants.id_etudiant JOIN modules ON notes.id_module = modules.id_module WHERE (etudiants.classe_etudiant = '$classe' AND notes.examen='$examen' AND notes.id_module ='$module')ORDER BY valeur_note DESC";
                require("connexion.php");
                $resultat = mysqli_query($connexion, $query);

                return $resultat;
            }
        
        //mettre a jour une ligne
        public function update()
            {
                $id_note = $_POST['id_note'];
                $id_module = $_POST['id_module'];
                $valeur_note = $_POST['valeur_note'];
           
                if($valeur_note<10){
                   $appreciation = "faible";
                }else if($valeur_note<12){
                   $appreciation = "passable";
                }else if($valeur_note<14){
                   $appreciation = "Assez-bien";
                }else if($valeur_note<16){
                   $appreciation = "Bien";
                }else if($valeur_note<=20){
                   $appreciation = "Très-bien";
               }else{
                   $appreciation = "incorrect";
               }
           
                    
                $query = "UPDATE notes set id_module='$id_module', valeur_note='$valeur_note', appreciation='$appreciation' where id_note='$id_note'";
                require("connexion.php");
                $resultat = mysqli_query($connexion, $query);

                    if($resultat == 1)
                    {
                    echo "<script>alert('note modifiée')</script>";
                        echo "<script>window.location = 'home.php?information=../../../views/notes/index';</script>";
                    }
                    else
                    {
                        echo "<script>alert('Contactez le developpeur');</script>";
                    }
                return $resultat;
            }
        
         //Supprimer une ligne   
        public function delete($notesByebye)
            {
                $query = " DELETE FROM notes WHERE id_note='$notesByebye'";
                require("connexion.php");
                $resultat = mysqli_query($connexion, $query);
            }

        //Recuperer la colonne examen depuis la table notes
        public function examen()
            {
                $query = "SELECT DISTINCT examen FROM notes";
                require("connexion.php");

                $resultat = mysqli_query($connexion, $query);
                
                return $resultat;
            }

        //Recuperer des info dans les tables: etudiants, notes et modules en utilisant la jointure
        public function id_noteChoisir($id_note)
            {
                $query = "SELECT notes.id_note, notes.examen, notes.id_etudiant, etudiants.classe_etudiant, etudiants.nom_etudiant, notes.valeur_note,  modules.id_module, modules.nom, notes.appreciation FROM notes JOIN etudiants ON  notes.id_etudiant = etudiants.id_etudiant JOIN modules ON notes.id_module = modules.id_module  where id_note='$id_note'";
                
                require("connexion.php");

                $resultat = mysqli_query($connexion, $query);
                
                return $resultat;
            }

         //Recuperer des info dans les tables: notes et modules en utilisant la jointure
        public function module()
            {
                $query = "SELECT DISTINCT notes.id_module, modules.nom FROM notes JOIN modules ON notes.id_module = modules.id_module ORDER BY nom ASC";
                require("connexion.php");
                $resultat = mysqli_query($connexion, $query);

                return $resultat;
            }
            
        public function readOnEtudiant($id_etudiant, $examen)
            {
                $query = "SELECT notes.examen, notes.valeur_note, notes.appreciation, modules.nom, modules.coef FROM notes join modules on notes.id_module = modules.id_module where (id_etudiant='$id_etudiant' and examen = '$examen')";
                require("connexion.php");

                $resultat = mysqli_query($connexion, $query);
                
                return $resultat;
            }    
    }
?>