<?php
	include __DIR__ . ("/../../../controllers/AuthentificationController.php");

	$authAdminController = new adminController;

		if(isset($_POST['inscrire']))
		{
			$admin = $authAdminController -> create();
         
         return $admin;
		}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulaire</title>
   <link rel="stylesheet" href="../../../assets/fontawesome-free-6.3.0-web/css/all.min.css">
   <link rel="stylesheet" href="../../../assets/css/style1.css" />
   <script src="../../../assets/js/script1.js" async></script>
</head>

<body>
   <div class="container">
      <div class="header">
         <h2>Création d'un compte</h2>
      </div>
      <form method="post" enctype="multipart/form-data" class="form">
		<div class="form-control">
            <label for="nom">Nom </label>
			<input type="text" id="nom" name="nom_admin" placeholder="Nom + prénom(s) ..." required> 
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-check fa-exclamation"></i>
            <small>Message d'erreur</small>
         </div>
		 
		 <div class="form-control">
            <label for="username">Nom utilisateur</label>
			<input type="text" id="username"  name="nomUtilisateur_admin" placeholder="ex: koto" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-check fa-exclamation"></i>
            <small>Message d'erreur</small>
         </div>
         <div class="form-control">
            <label for="email">Email</label>
			<input type="email" id="email" name="email_admin" placeholder="ex: koto@gmail.com" required> 
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-check fa-exclamation"></i>
            <small>Message d'erreur</small>
         </div>
		 <div class="form-control">
		 <label for="image" class="col-sm-2 control-label">Sélectionnez une image:</label>
		 <input type="file" id="image" name="image"> 
	     </div>
		<div class="form-control">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="motDePasse_admin" placeholder="Votre mot de passe">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-check fa-exclamation"></i>
            <small>Message d'erreur</small>
         </div>
         <div class="form-control">
            <label for="">Confirmation du mot de passe</label>
            <input type="password" id="password2" placeholder="Ronasdev">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-check fa-exclamation"></i>
            <small>Message d'erreur</small>
         </div>

         <button type="submit" name="inscrire"><i class="fas fa-user-plus"></i>S'inscrire</button>
      </form>
   </div>

</body>

</html>