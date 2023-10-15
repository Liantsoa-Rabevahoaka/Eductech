<?php 

    if(isset($_POST['enregistrer']))
        {
            $profController -> insert();
        }


?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Création d'un professeur
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			Créer un prof
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">

					<div class="form-group"> <label for="nom" class="col-sm-2 control-label">Nom du prof</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="nom" name="nomComplet_prof" placeholder="Nom + prénom(s) .." required> </div>
					</div>


					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="email" class="form-control" name="email_prof" placeholder="ex: koto@gmail.com" required> </div>
					</div>


					<div class="form-group"> <label for="qualification_prof" class="col-sm-2 control-label">Qualification</label>
						<div class="col-sm-9"> <input type="text" id="qualification_prof" class="form-control" name="qualification_prof" placeholder="Qualification" required> </div>

					</div>


					<div class="form-group"> <label for="contact_prof" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="tel" id="contact_prof" class="form-control" name="contact_prof" Placeholder="Contact Number" required> </div>

					</div>


					<div class="form-group">  <label for="selector1" class="col-sm-2 control-label">Genre</label>
						<div class="col-sm-9"> 
							<select id="selector1" class="form-control1" name="sexe_prof" required>
								<option value="masculin">Masculin</option>
								<option value="feminin">Féminin</option>
							</select>
					</div>

					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Sélectionnez une image:</label>
						<div class="col-sm-9"> <input type="file" id="image" name="image"> </div>

					</div>


					<div class="col-sm-offset-2"> 
						<input type="submit" class="btn btn-default" name="enregistrer" value ="Ajouter le nouveau prof">
						</div>
				</form>
			</div>

		</div>


	</div>