<?php
session_start();
error_reporting(0);
?>  
<!doctype html>
<html>
<head>
<title>Eductech || Home Page</title>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="Assets1/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="Assets1/css/style_copy.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="Assets1/js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="Assets1/js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts--> 
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="Assets1/css/component.css" />
<link rel="stylesheet" type="text/css" href="Assets1/css/default.css" />
<link href="Assets1/css/autre.css" rel='stylesheet' type='text/css' />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="Assets1/js/move-top.js"></script>
<script type="text/javascript" src="Assets1/js/easing.js"></script>
<!--script-->
<link href="Assets/images/study.png" rel="icon">
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<?php include_once('includes/header.php');?>
<div class="banner">
  <div class="container">
  <script src="Assets/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">
       <div class="callbacks_container">
        <ul class="rslides" id="slider">
         <li>     
          <h3>Systeme de gestion d'ecole</h3>   
           <p>Les étudiants inscrits peuvent se connecter ici</p>             
          <div class="readmore">
          <a href="views/Authentification/etudiants/index.php">Connexion<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
         </li>

 
        </ul>
      </div>
    </div>
</div>      
  </div>
<div class="welcome">

	<div class="container">
      <h2>A propos</h2>
      <p>
        <div style="text-align: start;"><font color="#7b8898" face="Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, ????, ??, SimSun, STXihei, ????, serif">
          <span style="font-size: 26px;">Notre site de gestion d'école offre une solution complète et innovante pour simplifier le quotidien des établissements scolaires. Grâce à notre plateforme conviviale, les directeurs, enseignants et élèves bénéficient 
          d'outils puissants pour gérer les emplois du temps, les notes, les matières et bien plus encore. Faites confiance à notre expertise pour optimiser l'efficacité de votre établissement et offrir une expérience éducative de qualité.
          </span></font><br></div>
      </p>
	</div>
</div>

<!--testmonials-->
<div class="testimonials">
	<div class="container">
			<div class="testimonial-nfo">
        <h3>Objectifs</h3>
         <marquee  style="height:400px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">
				<h4 target="_blank" style="color:#fff;">Regrouper les données sous forme numérique</h4>
        <hr /><br />
		  	<h4 target="_blank" style="color:#fff;">Apporter des innovations au sein de la gestion d'école</h4>
        <hr /><br />
	</marquee></div>
	</div>
</div>
<!--\testmonials-->
<!--specfication-->

<!--/specfication-->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
