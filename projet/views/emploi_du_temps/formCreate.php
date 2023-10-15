<?php 


 if(isset($_POST['ajouter_emploi_du_temps']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	 $start_time = $_POST['start_time'];
	 $end_time = $_POST['end_time'];
	 $niveau = $_POST['niveau'];
	 $id_module = $_POST['id_module'];
	 $id_emploi_du_temps = $_POST['id_emploi_du_temps'];
	 $date = $_POST['date'];

	 if($start_time=="" OR $end_time=="")
	 {
		 echo "<script>alert('....');</script>";
	 }
	 else
	 {
	
	 
	$ajouter_emploi_du_temps = $emploi_du_tempsController -> ajouter_emploi_du_temps($id_emploi_du_temps, $start_time, $end_time, $niveau, $date);
	$ajouter_emploi_du_temps_des_modules = $emploi_du_tempsController -> ajouter_emploi_du_temps_des_modules($id_emploi_du_temps, $id_module);	
	if($ajouter_emploi_du_temps_des_modules==true)
	 {
		echo "<script>alert('Information ajoutée')</script>";
		echo "<script>window.location='home.php?information=../../../views/emploi_du_temps/index';</script>";
	 }
	 else
	 {
		 echo "<script>alert('Erreur dans l'ajout d'information de l'emploi du temps');</script>";
	 }
 }
 }

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
		<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Création d'un emploi du temps
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			Créer un emploi du temps
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">id_emploi_du_temps</label>
						<div class="col-sm-9"> <input type="number" class="form-control" id="inputEmail3" name="id_emploi_du_temps"> </div>
					</div>

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
						<div class="col-sm-9"> <input type="date" class="form-control" id="inputEmail3" name="date"> </div>
					</div>

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Start time</label>
						<div class="col-sm-9"> <input type="time" class="form-control" id="inputEmail3" name="start_time" placeholder=""> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">End time</label>
						<div class="col-sm-9"> <input type="time" class="form-control" id="inputEmail3" name="end_time" placeholder=""> </div>
					</div>
					<!-- <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">id_module</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="id_module" placeholder=""> </div>
					</div> -->
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Module</label>
					<div class="col-sm-9"> <select name="id_module" id="selector1" class="form-control1">
							                <option>Choisir un module</option>
													<?php 
												        $module = $emploi_du_tempsController->module();
													    while($niv = $module->fetch_assoc())
													{
                                                    ?>

							                <option value="<?php echo $niv['id_module']; ?>"><?php echo $niv['nom']; ?></option>
													<?php }?>
					</select></div>
					</div>

					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">niveau</label>
					<div class="col-sm-9"> <select name="niveau" id="selector1" class="form-control1">
							                <option>Choisir un niveau</option>
													<?php 
												        $niveau = $emploi_du_tempsController->niveau();
													    while($niveau_ok = $niveau->fetch_assoc())
													{
                                                    ?>

													<option value="<?php echo $niveau_ok['niveau']; ?>"><?php echo $niveau_ok['niveau']; ?></option>
													<?php }?>
					</select></div>
					</div>


					<div class="col-sm-offset-2"> 
						<input type="submit" class="btn blue" name="ajouter_emploi_du_temps" value ="Ajouter emploi du temps">
						</div>
				</form>
			</div>

		</div>


	</div>