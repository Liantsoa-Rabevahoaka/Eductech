<?php 

    $id_note = $_GET['id_note'];
    $note = $noteController -> id_noteChoisir($id_note);
	$infoNote = $note -> fetch_assoc();

	if(isset($_POST['modifier']))
        {
            $noteController -> update();
        }


?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="home.php?information=information">Acceuil</a></li>
			<li class="active">
				Modifier une note
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
					<input type="hidden" name="id_note" value="<?php echo  $infoNote['id_note'] ?>">
					<div class="form-group">  
						<p class="col-sm-2 control-label">Numéro etudiant</p>
							<div class="col-sm-9"><p ><?php echo  $infoNote['id_etudiant'] ?></p></div>
					</div>
					<div class="form-group">  
						<p class="col-sm-2 control-label">Examen</label>
							<div class="col-sm-9"><p ><?php echo  $infoNote['examen'] ?></p></div>
					    </div>
                
				
					<div class="form-group"> <label for="classe_et" class="col-sm-2 control-label">Classe</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="classe_etudiant" name="classe_etudiant" value="<?php echo $infoNote['classe_etudiant']; ?>"> </div>
					</div>


					<div class="form-group"> <label for="id_module" class="col-sm-2 control-label">Code Module</label>  
							<div class="col-sm-9"> <input type="text" class="form-control" id="id_module" name="id_module" value="<?php echo $infoNote['id_module']; ?>" placeholder="<?php echo  $infoNote['nom']; ?>"> </div>
						</div>

						<div class="form-group"> <label for="valeur_note" class="col-sm-2 control-label">Valeur de la note</label>
							<div class="col-sm-9"> <input type="text" class="form-control" id="valeur_note" name="valeur_note" value="<?php echo  $infoNote['valeur_note']; ?>"> </div>
						</div>

					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="modifier">Modifier</button></div>
                    </div>
				</form>
			</div>

		</div>


	</div>