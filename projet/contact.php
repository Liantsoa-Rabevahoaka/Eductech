<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || Contact Us Page</title>
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
	<h2>Contact</h2>
	</div>
</div>
<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">N'hésitez pas à nous contacter !</h3>
				</div>
				<div class="contact-grids">	
					<div class="col-md-4 contact-grid-left">
						<h3>Adresse :</h3>
						<p>5 Lalana Rue Pasteur - Antanimena
						</p>
					</div>	
					<div class="col-md-4 contact-grid-middle">
						<h3>Telephone :</h3>
						<p>020 22 248 74
						</p>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<p>contact@esti.mg
						</p>
					</div>			
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //contact -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
