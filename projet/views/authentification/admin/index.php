<?php
	session_start();

	include __DIR__ . ("/../../../controllers/AuthentificationController.php");
    
    $authAdminController = new adminController;

    if (isset($_POST['admin_connecter'])) 
		{
            $authAdminController -> login();
		}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'Authentification</title>


	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../../../Assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="../../../Assets/css/font-awesome.css" rel="stylesheet"> 
	<link href="../../../Assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='../../../Assets///fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../../Assets/css/icon-font.min.css" type='text/css' />
	<link href="../../../Assets/images/study.png" rel="icon">


</head>
<body>
		<!--/login-->
		
				<div class="error_page">
						<!--/login-top-->
						
							<div class="error-top">
							
								<h2 class="inner-tittle page">Administration</h2>
							
								<div class="login">
									<h3 class="inner-tittle t-inner">Page d'Authentification </h3>
								
										<div class="buttons login">
													<ul>
														<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
														<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
														<div class="clearfix"></div>
													</ul>
												</div>
                                                <form method="post">
														<input type="text" class="text" name="nomUtilisateur_admin" placeholder="Votre nom d'utilisateur">
															<input type="password" placeholder="Mot de passe" name="motDePasse_admin">
																<div class="submit"><input type="submit" value="Se connecter" name="admin_connecter"></div>
																<div class="clearfix"></div>
																		
																<div class="new">
																<p>Vous n'avez pas encore une compte admin? <label class="checkbox11"><a href="./formCreate.php"><strong>S'inscrire</strong></a></label></p>			
																<div class="clearfix"></div>
																</div>
												</form>
								</div>

								
							</div>
							
							
						<!--//login-top-->
					</div>

					<!--//login-->
                    <div class="footer">
			<div class="error-btn">
			<a class="read fourth" href="../../../index.php">Retourner à la page d'accueil</a>
			</div>
	</div>	
			<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>