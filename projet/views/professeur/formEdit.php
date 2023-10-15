<?php 

    $id_prof = $_GET['id_prof'];
    $infoProf_avModif = $profController-> id_profChoisir($id_prof);
	$afficherInfo_profAvModif = $infoProf_avModif->fetch_assoc();


	if(isset($_POST['modifier']))
	{
		$profController -> modifier($id_prof);
	}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Modifier une information d'un professeur
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
				<form class="form-horizontal" method="post" enctype="multipart/form-data">

					<div class="form-group"> <label for="nom" class="col-sm-2 control-label">Nom du prof</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="nom" name="nomComplet_prof" placeholder="Nom + prénom(s) .." value="<?php echo $afficherInfo_profAvModif['nomComplet_prof']; ?>"> </div>
					</div>


					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="email" class="form-control" name="email_prof" placeholder="ex: koto@gmail.com" value="<?php echo $afficherInfo_profAvModif['email_prof']; ?>"></div>
					</div>


					<div class="form-group"> <label for="qualification_prof" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" id="qualification_prof" class="form-control" name="qualification_prof" placeholder="Qualification"  value="<?php echo $afficherInfo_profAvModif['qualification_prof']; ?>"> </div>

					</div>


					<div class="form-group"> <label for="contact_prof" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="tel" id="contact_prof" class="form-control" name="contact_prof" Placeholder="Contact Number" value="<?php echo $afficherInfo_profAvModif['contact_prof']; ?>"> </div>

					</div>

					<div class="form-group">  <label for="selector1" class="col-sm-2 control-label">Genre</label>
						<div class="col-sm-9"> 
							<select id="selector1" class="form-control1" name="sexe_prof" required>
								<option value="<?php echo $afficherInfo_profAvModif['sexe_prof']; ?>">---</option>
								<option value="masculin">Masculin</option>
								<option value="feminin">Féminin</option>
							</select>
					</div>

					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Sélectionnez une image:</label>
						<div class="col-sm-9"> <input type="file" id="image" name="image"> </div>




					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="modifier">Modifier</button> </div>
				</form>
			</div>

		</div>


	</div>