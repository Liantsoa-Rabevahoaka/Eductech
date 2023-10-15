<?php

    $serveur = "localhost";
    $utilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "eductech";
    
    $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
    
    if(!$connexion){
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    
?>
