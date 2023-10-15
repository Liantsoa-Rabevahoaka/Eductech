<?php 

 	$id_emploi_du_temps = $_GET['id_emploi_du_temps'];
 	$info_emploi_du_temps = $emploi_du_tempsController->listes_emploi_du_temps_by_id($id_emploi_du_temps);
	$afficher_emploi_du_temps = $info_emploi_du_temps->fetch_assoc();


if(isset($_POST['modifier_emploi_du_temps']))
{
	
	
	$modifier_date = $_POST['modifier_date'];
	$modifier_start_time = $_POST['modifier_start_time'];
	$modifier_end_time = $_POST['modifier_end_time'];

	
	$modifier_ok = $emploi_du_tempsController->modifier_emploi_du_temps($modifier_date, $modifier_start_time, $modifier_end_time, $id_emploi_du_temps);
	if($modifier_ok==true)
	{
		echo "<script>alert('Information modifiée')</script>";
		echo "<script>window.location='home.php?information=../../../views/emploi_du_temps/index';</script>";

	}
	else
	{
		echo "<script>alert('Erreur lors de la modification');</script>";
	}
	

}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
		<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Modifier une information d'un emploi du temps
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
	<h2 class="inner-tittle">
            Modifier
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
						<div class="col-sm-9"> <input type="date" class="form-control" id="inputEmail3" name="modifier_date" value="<?php echo $afficher_emploi_du_temps['date']; ?>"> </div>
					</div>

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Heure de début</label>
						<div class="col-sm-9"> <input type="time" class="form-control" id="inputEmail3" name="modifier_start_time" value="<?php echo $afficher_emploi_du_temps['start_time']; ?>"> </div>
					</div>

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Heure de fin</label>
						<div class="col-sm-9"> <input type="time" class="form-control" id="inputEmail3" name="modifier_end_time" value="<?php echo $afficher_emploi_du_temps['end_time']; ?>"> </div>
					</div>

					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="modifier_emploi_du_temps">Modifier emploi du temps</button> </div>
				</form>
			</div>

		</div>


	</div>