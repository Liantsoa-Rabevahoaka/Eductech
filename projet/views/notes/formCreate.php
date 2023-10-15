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
            
            <form method="post">
				<label for="selector1">Veuillez choisir une classe pour créer une note</label>
					<select name="noteExamen" id="selector1" class="form-control1">
						<?php 
							$et = $etudiantController->classe_etudiant();
							while($classe_et = $et->fetch_assoc())
							{
                        ?>
						<option value="<?php echo $classe_et['classe_etudiant']; ?>"><?php echo $classe_et['classe_etudiant']; ?></option>
						<?php }?>
						</select>
						<input type="submit" name="voir_et" class="btn red" value="Choisir">
			</form>	
			
			<div class="content tab">

<?php if(isset($_POST['voir_et']))
							{   

								$classe_etudiant = $_POST['noteExamen'];
								$ListesEt = $etudiantController->read($classe_etudiant);
								
							?>

							
								<div class="graph">
								<div class="tables">
									<table class="table table-bordered "> 
										<thead>
											<tr>
												<th>Numéro de l'élève</th>
												<th>Nom et prénoms</th>
												<th>classe</th>
												<th></th>
											</tr>
										</thead>
										<tbody> 

												
										<?php 
								$t_sn = 1;
								while($ListesEtVoir = $ListesEt->fetch_assoc()){
								?>	
											<tr>
												<td><?php echo $ListesEtVoir['id_etudiant'] ?></td>
												<td><?php echo $ListesEtVoir['nom_etudiant'] ?></td>
												<td><?php echo $ListesEtVoir['classe_etudiant'] ?></td>
												<td><a href="home.php?information=../../../views/notes/formCreate1&id_etudiant=<?php echo $ListesEtVoir['id_etudiant']; ?>" class="btn red">Créer une note</a>
											</tr>
										<?php $t_sn++; } } else {?>

									
															<td colspan="12">Aucune elève trouvée
																</td>
															<?php 
							}   ?>
										</tbody> 

												
												</table> 
											</div>
									</div>
												
							
						</div>
						<!--//graph-visual-->
					</div>