<?php 

    $id_etudiant = $_GET['id_etudiant'];
    $infoEt = $etudiantController->id_etudiantChoisir($id_etudiant);
	$afficherInfoEt = $infoEt->fetch_assoc();

    $infoModule = $moduleController->listes_modules();


    if(isset($_POST['valider']))
    	{
			$noteController->create();
        }
	
?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">Créations d'une note</li>
		</ol>
	</div>

	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">Créer des notes</h2>
		<div class="graph">

		<div class="grid-1">
		<div class="form-body">
			<form class="form-horizontal" method="post">

			<div class="form-group"> <p class="col-sm-2 control-label">Numéro de l'étudiant: <div class="col-sm-9">
				 <input type="text" class="form-control" name="id_etudiant" value="<?php echo $afficherInfoEt['id_etudiant']; ?>"></p> 
				</div>
			</div>


			<div class="form-group"> <label for="selector1"  class="col-sm-2 control-label">Examen</label>
						<div class="col-sm-9">
							<select name="examen" id="selector1" class="form-control1">
								<option>Choisir un examen</option>
									<?php 
										$exam = $noteController->examen();
										while($ex = $exam->fetch_assoc())
									{
									?>

							<option value="<?php echo $ex['examen']; ?>"><?php echo $ex['examen']; ?></option>
									<?php }?>
							</div>
			</div>
			


			<div class="form-group"> <p class="col-sm-2 control-label">Classe: <div class="col-sm-9">
					<div class="col-sm-9"> <input type="text" class="form-control" name="classe_etudiant" value="<?php echo $afficherInfoEt['classe_etudiant']; ?>"> </p> </div>
				</div>

				
			<div class="form-group"> <label for="selector1"  class="col-sm-2 control-label">Modules</label>
						<div class="col-sm-9">
						<select id="selector1" class="form-control1" name="module">
							<option>Choisir un module</option>
							<?php
							while($infoModuleVu = $infoModule->fetch_assoc()){
							?>	
								<option value="<?php echo $infoModuleVu['id_module']; ?>"><?php echo $infoModuleVu['nom']; ?></option>
							<?php } ?>
						</select>
							</div>
			</div>

				<div class="form-group"> <label for="valeur_note" class="col-sm-2 control-label">Valeur</label>
					<div class="col-sm-9"> <input type="number" class="form-control" id="valeur_note" name="valeur_note"> </div>
				</div>
				<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="valider">Valider</button> </div>
			</form>
		</div>

	</div>


</div>