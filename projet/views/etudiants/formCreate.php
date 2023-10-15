<?php
	if(isset($_POST['enregistrer']))
		{
			$etudiantController -> create();
		}
?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
			Créer un nouveau Etudiant
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
		<p>Créer un nouveau Etudiant</p>
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group"> <label for="nom" class="col-sm-2 control-label">Nom de l'étudiant</label>
						<div class="col-sm-9"> <input id="nom" type="text" class="form-control" placeholder="nom et prénom(s)" required name="nom_etudiant"> </div>
					</div>
					<div class="form-group"> <label for="nomU" class="col-sm-2 control-label">Nom utilisateur</label>
						<div class="col-sm-9"> <input type="text" id="nomU" class="form-control" placeholder="Username" required name="nomUtilisateur_etudiant"> </div>
					</div>
					<div class="form-group"> <label for="mdp_et" class="col-sm-2 control-label">Mot de passe</label>
						<div class="col-sm-9"> <input type="text" class="form-control"required id= "motDePasse-etudiant" name="mdp_et"> </div>
					</div>
					<div class="form-group"> <label for="mdp_et" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="email" class="form-control"required id= "email_etudiant" name="email_etudiant"> </div>
					</div>
					<div class="form-group"> <label for="classe_et" class="col-sm-2 control-label">Classe</label>
						<div class="col-sm-9"> <input type="text" class="form-control"required name="classe_etudiant"> </div>
					</div>
					
					<div class="form-group"> <label for="datedeNaissance_et" class="col-sm-2 control-label">Date de Naissance</label>
						<div class="col-sm-9"> <input type="date" class="form-control" name="dateDeNaissance_etudiant" required> </div>

					</div>
					<div class="form-group"> <label for="addresse_et" class="col-sm-2 control-label">Adresse</label>
						<div class="col-sm-9"> <input type="text" id="addresse_et" class="form-control" name="adresse_etudiant" required placeholder="ex: Lot ADTer Bis Ambohitrarahaba"> </div>

					</div>
					<div class="form-group"> <label for="pere_et" class="col-sm-2 control-label">Nom du père</label>
						<div class="col-sm-9"> <input type="text" id="pere_et" class="form-control" required name="pere_etudiant" placeholder="Nom de père"> </div>

					</div>
					<div class="form-group"> <label for="mere_et" class="col-sm-2 control-label">Nom de la mère</label>
						<div class="col-sm-9"> <input type="text" id="mere_et" class="form-control" required name="mere_etudiant" placeholder="Nom de la mère"> </div>

					</div>
					<div class="form-group"> <label for="contact" class="col-sm-2 control-label">Contact des Parents</label>
						<div class="col-sm-9"> <input type="tel" id="contact" class="form-control" required name="contactParent_etudiant" Placeholder="Numéro téléphone"> </div>

					</div>
					<div class="form-group"><label class="col-sm-2 control-label">Genre</label>
						
						<div class="col-sm-9"> 
						<input type="radio" name="sexe_etudiant" value="masculin"id="masculin"><label for="masculin">Masculin</label>
                        <input type="radio" name="sexe_etudiant" value="feminin" id="feminin"/><label for="feminin">Feminin</label>
						</div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Sélectionnez une image:</label>
						<div class="col-sm-9"> <input type="file" id="image" name="image"> </div>

					</div>


					<div class="col-sm-offset-2"> 
					<input type="submit" class="btn btn-primary" value="Ajouter" name="enregistrer">
					<button type="reset" class="btn btn-default">Reseter</button>
						</div>
				</form>
			</div>

		</div>


	</div>