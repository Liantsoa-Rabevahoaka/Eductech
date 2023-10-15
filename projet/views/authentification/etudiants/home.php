<?php
	include __DIR__ . ("/../../../controllers/AuthentificationController.php");
	$authEtudiantController = new Auth_etudiantController();

	include __DIR__ . "/../../../controllers/EtudiantController.php";
	$etudiantController = new etudiantController();

	include __DIR__ . "/../../../controllers/ProfController.php";
	$ProfController = new ProfController();

	include __DIR__ . ("/../../../controllers/NotesController.php");
	$noteController = new noteController();

	include __DIR__ . ("/../../../controllers/Emploi_du_tempsController.php");
	$emploi_du_tempsController = new emploi_du_temps_controller();

	include __DIR__ . "/../../../controllers/ModulesController.php";
	$moduleController = new modulesController();
	
	session_start();
        if(!$_SESSION['etudiant'])
        {
            header("location: ./index.php");
        }
        else
        {
		
	    $nomUtilisateur_etudiant = $_SESSION['etudiant'];
	    $infoEtudiant = $etudiantController->infoEtudiant($nomUtilisateur_etudiant);
	
	    $afficherInfo_et = $infoEtudiant->fetch_assoc();
        
        }
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>

    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="../../../Assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="../../../Assets/css/font-awesome.css" rel="stylesheet"> 
	<link href="../../../Assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='../../../Assets///fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../../../Assets/css/icon-font.min.css" type='text/css' />
	<script src="../../../Assets/js/jquery-1.10.2.min.js"></script>
	<link href="../../../Assets/images/study.png" rel="icon">
	<!--//skycons-icons-->

	
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<script src="js/css3clock.js"></script>
	<script src="js/skycons.js"></script>
	<script src="js/jquery.easydropdown.js"></script>







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
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<?php $cheminImages = "../../../Assets/images/etudiant";?> 
				<a href="#"><?php echo"<img src='" . $cheminImages . $afficherInfo_et['image_etudiant'] . "' alt='Aucun image' width='60px' >" ?></a>
				<a href="#"><span class=" name-caret"><?php echo $afficherInfo_et['nom_etudiant'];?></span></a>
				<p>Etudiant</p>
				<ul>
					<li><a class="tooltips" href="deconnexion.php"><span>Déconnexion</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Notes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
						<?php 
							$examen =$noteController->examen();
							while($liste_examen = $examen->fetch_assoc())
							{
						?>
							<li id="menu-academico-avaliacoes"><a href="home.php?information=notes&id_etudiant=<?php echo $afficherInfo_et['id_etudiant']; ?>&examen=<?php echo $liste_examen['examen'];?>"><?php echo $liste_examen['examen']; ?></a></li>
														<?php }?>
						</ul>
					</li>
			    </ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
		</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
        </div>
    </div>
</body>
</html>