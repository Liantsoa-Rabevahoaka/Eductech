<?php 

    $id_module = $_GET['id_module'];
    $info_module = $moduleController->listes_modules_by_id($id_module);
	$afficher_module = $info_module->fetch_assoc();


if(isset($_POST['modifier']))
{
	
	
	$id_module = $_POST['id_module'];
    $nom = $_POST['nom'];
    $coef = $_POST['coef'];
    $duree = $_POST['duree'];
    $id_prof= $_POST['id_prof'];

	$done = $moduleController->modifier_Modules($id_module, $nom, $coef, $duree, $id_prof);
	if($done==true)
	{
		echo "<script>alert('Information modifiée')</script>";
			 echo "<script>window.location = 'home.php?information=../../../views/modules/index';</script>";
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
                   
                    <div class="form-group"> <label for="id_modules" class="col-sm-2 control-label">Code module</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="id_module" name="id_module" required value="<?php echo $afficher_module['id_module']; ?>"> </div>
					</div>


					<div class="form-group"> <label for="nom" class="col-sm-2 control-label">Nom</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="nom" name="nom" required value="<?php echo $afficher_module['nom']; ?>"> </div>
					</div>


					<div class="form-group"> <label for="Coef" class="col-sm-2 control-label">Coefficent</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="coef" required value="<?php echo $afficher_module['coef']; ?>"> </div>
					</div>


					<div class="form-group"> <label for="duree" class="col-sm-2 control-label">duree</label>
						<div class="col-sm-9"> <input type="text" id="duree" class="form-control" name="duree" required value="<?php echo $afficher_module['duree']; ?>"> </div>

					</div>


					<div class="form-group"> <label for="duree" class="col-sm-2 control-label">Professeur</label>
					<div class="col-sm-9">
						<select name="id_prof" id="selector1" required class="form-control1">
												<option>Choisir un prof</option>
														<?php 
															$professeur = $moduleController->professeur();
															while($professeur_ok = $professeur->fetch_assoc())
														{
														?>

														<option value="<?php echo $professeur_ok['id_prof']; ?>"><?php echo $professeur_ok['nomComplet_prof']; ?></option>
														<?php }?>
						</select>
					</div>
					</div>

					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="modifier">Modifier</button> </div>
				</form>
			</div>

		</div>


	</div>