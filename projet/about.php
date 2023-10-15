<?php
session_start();
error_reporting(0);

?>
<!doctype html>
<html>
<head>
<title>School  Management System || About Us Page</title>
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
<link href="Assets/images/study.png" rel="icon">
<!--script-->
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
<!--header-->
<?php include_once('includes/header.php');?>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>Notre équipe</h2>
	</div>
</div>
<!--header-->
<!-- About -->
<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="Assets/images/membre.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
			 <div style="text-align: start;"><font color="#7b8898" face="Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, ????, ??, SimSun, STXihei, ????, serif">
				<span style="font-size: 26px;">Nous sommes des élèves de l'esti en L1 du groupe G1. Notre équipe est composé de cinq membres: 
				<ul>
				<li>Ambinintsoa n°13</li> <li>Liantsoa n°15</li> <li>Andry n°20</li> <li>Rojo n°31</li> <li>Félicité n°33</li> </span>
				</ul>
				</font><br></div>
			</div>
	 </div>
</div>
<!-- /About -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
