<?php 

    $id_etudiant = $_GET['id_etudiant'];
    $infoEt_avModif = $etudiantController->id_etudiantChoisir($id_etudiant);
	$afficherInfo_EtAvModif = $infoEt_avModif->fetch_assoc();


		if(isset($_POST['modifier']))
		{
			$etudiantController -> modifier($id_etudiant);
		}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Modifier une information d'un étudiant
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
                    <div class="form-group"> 
                    <?php $cheminImages = "../../../Assets/images/";?> 
                        <label for="address" class="col-sm-2 control-label">Photo de profil:</label>
                        <div class="col-sm-4 "><?php echo "<img src='" . $cheminImages . $afficherInfo_EtAvModif['image_etudiant'] . "' alt='Pas d'image' width='100px' >"; ?>
                        <input type="file" id="image" name="image"?></div>

					</div>
					<div class="form-group"> <label for="nomComplet_et_nouveau" class="col-sm-2 control-label">Noms et prénoms</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="nom_etudiant" name="nom_etudiant" value="<?php echo $afficherInfo_EtAvModif['nom_etudiant']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="email_et_nouveau" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="mail" id="email_etudiant" class="form-control" name="email_etudiant" value="<?php echo $afficherInfo_EtAvModif['email_etudiant']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="adresse_etudiant" class="col-sm-2 control-label">Adresse</label>
						<div class="col-sm-9"> <input type="text" id="adresse_etudiant" class="form-control" name="adresse_etudiant" value="<?php echo $afficherInfo_EtAvModif['adresse_etudiant']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="classe_et_nouveau" class="col-sm-2 control-label">Classe</label>
						<div class="col-sm-9"> <input type="text" id="classe_etudiant" class="form-control" name="classe_etudiant" value="<?php echo $afficherInfo_EtAvModif['classe_etudiant']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="contactParent_et_nouveau" class="col-sm-2 control-label">Contact des Parents</label>
						<div class="col-sm-9"> <input type="tel" id="contactParent_etudiant" class="form-control" name="contactParent_etudiant" value="<?php echo $afficherInfo_EtAvModif['contactParent_etudiant']; ?>"> </div>

					</div>
					
					<div class="form-group">  <label for="selector1" class="col-sm-2 control-label">Genre</label>
						<div class="col-sm-9"> <select id="selector1" class="form-control" name="sexe_etudiant">
						    <option value="<?php echo $afficherInfo_EtAvModif['sexe_etudiant']; ?>">---</option>
							<option>Masculin</option>
						   <option>Féminin</option>
						</select> </div>

					</div>
					


					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="modifier">Modifier</button> </div>
				</form>
			</div>

		</div>


	</div>