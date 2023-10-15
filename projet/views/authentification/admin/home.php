<?php
	
	include __DIR__ . ("/../../../controllers/AuthentificationController.php");
    $authAdminController = new adminController();

	include __DIR__ . ("/../../../controllers/EtudiantController.php");
	$etudiantController = new etudiantController();

	include __DIR__ . ("/../../../controllers/ProfController.php");
	$profController = new profController();

	include __DIR__ . ("/../../../controllers/Emploi_du_tempsController.php");
	$emploi_du_tempsController = new emploi_du_temps_controller();

	include __DIR__ . "/../../../controllers/ModulesController.php";
	$moduleController = new modulesController();

	include __DIR__ . ("/../../../controllers/NotesController.php");
	$noteController = new noteController();

	//Recuperer le nombre de module depuis le controller
	$nombre_modules = $moduleController->nombre_modules();
	$nombre_modules_ok = $nombre_modules->num_rows;
	
	// Recuperer le nombre d'emploi du temps depuis le controller
	$nombre_edt = $emploi_du_tempsController->nombre_emploi_du_temps();
	$nombre_edt_ok = $nombre_edt->num_rows;
	
	// Recuperer le nombre de professeur depuis le controller
	$nombre_prof = $profController ->listeProf();
	$nombre_prof_ok = $nombre_prof->num_rows;

	// Recuperer le nombre d'etudiant depuis le controller
	$nombre_etudiant = $etudiantController ->nombre_etudiants();
	$nombre_etudiant_ok = $nombre_etudiant->num_rows;

	session_start();

	   if(!$_SESSION['meadmin'])
	   {
		   header("location: ./index.php");
	   }
	   else
	   {
		   $nomUtilisateur_admin = $_SESSION['meadmin'];
		   $info = $authAdminController->read($nomUtilisateur_admin);
           $info_admin = $info->fetch_assoc();
		}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

	<link href="../../../Assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="../../../Assets/css/font-awesome.css" rel="stylesheet"> 
	<link href="../../../Assets/css/autre.css" rel="stylesheet"> 
	<link href="../../../Assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='../../../Assets///fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../../Assets/css/icon-font.min.css" type='text/css' />
	<link href="../../../Assets/images/study.png" rel="icon">
	<!--//skycons-icons-->
	

</head>
<body>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
                <div class="header-section">
                    <div class="clearfix"></div>

                </div>

				<?php 
				
				
				
				$homepage = "information";
				if(isset($_GET['information']))
				{
					$homepage = $_GET['information'];
				}
				include $homepage.".php";
				
				
						
				?>
               


        <div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo"> <h1>Eductech</h1></span> 
                 </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<?php $cheminImages = "../../../assets/images/";?> 
				<a href="#"><?php echo"<img src='" . $cheminImages . $info_admin['image_admin'] . "' alt='Aucun image' width='60px' >" ?></a>
				<a href="#"><span class=" name-caret"><?php echo $info_admin['nom_admin']; ?></span></a>
				<p>Système d'administrartion de Eductech</p>
				<ul>
					<li><a class="tooltips" href="deconnexion.php"><span>Deconnexion</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-user"></i> <span>Etudiants</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-boletim"><a href="home.php?information=../../../views/etudiants/formCreate">Ajouter un étudiant</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/etudiants/index">Listes des étudiants</a></li>
						</ul>
					</li>

					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Emploi du temps</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-boletim"><a href="home.php?information=../../../views/emploi_du_temps/formCreate">Ajouter un emploi du temps</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/emploi_du_temps/index">Listes des emplois du temps</a></li>
						</ul>
					</li>
					
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Modules</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/modules/formCreate">Ajouter un module</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/modules/index">Listes des modules</a></li>
						</ul>
					</li>

					<li id="menu-academico"><a href="#"><i class="fa fa-check-circle"></i> <span>Notes des étudiants</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/notes/formCreate">Ajouter une note</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/notes/index">Listes notes des élèves</a></li>
						</ul>
					</li>
					
					<li id="menu-academico"><a href="#"><i class="fa fa-user"></i> <span>Professeurs</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/professeur/formCreate">Ajouter un prof</a></li>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=../../../views/professeur/index">Listes des professeurs</a></li>
						</ul>
					</li>



			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<!--js -->
	<link rel="stylesheet" href="../../../Assets/css/vroom.css">
	<script type="text/javascript" src="../../../Assets/js/vroom.js"></script>
	<script type="text/javascript" src="../../../Assets/js/TweenLite.min.js"></script>
	<script type="text/javascript" src="../../../Assets/js/CSSPlugin.min.js"></script>
	<script src="../../../Assets/js/jquery.nicescroll.js"></script>
	<script src="../../../Assets/js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../../../Assets/js/bootstrap.min.js"></script>
</body>

</html>
        </div>
    </div>
</body>
</html>