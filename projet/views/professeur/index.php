<div class="outter-wp">
				<!--sub-heard-part-->
					<div class="sub-heard-part">
					<ol class="breadcrumb m-b-0">
						<li><a href="home.php?information=information">Acceuil</a></li>
						<li class="active">Listes des professeurs</li>
					</ol>
					</div>
				<!--//sub-heard-part-->
				<div class="graph-visual tables-main">
						<h2 class="inner-tittle">Listes des professeurs</h2>
							<div><p id="changeOk"></p></div>
											<div class="graph">
										<div class="tables">
									
											<table class="table table-bordered "> 
											
												<thead>
													<tr>
														<th>Code Professeur</th>
                                                        <th>Photo</th>
														<th>Nom et prénoms</th> 
														<th>Email</th>
														<th>Qualification</th>
														<th>Contact</th>
														<th>Genre</th>
														<th></th>
													</tr>
												</thead>
												<tbody> 
													
							<?php   
									$infoProf_admin = $profController -> listeProf();
									$nombreProf = $infoProf_admin-> num_rows;
									if($nombreProf>0){
									$numéro = 1;
									while($infoProf_adminVu = $infoProf_admin->fetch_assoc()){
							?>						
											
													
													<tr>
														
														<td><?php echo $infoProf_adminVu['id_prof']; ?></td>
                                                        <?php $cheminImages = "../../../assets/images/prof";?> <?php echo "<td><img src='" . $cheminImages . $infoProf_adminVu['image_prof'] . "' alt='Aucun image' width='60px' ></td>"; ?> 
														<td><?php echo $infoProf_adminVu['nomComplet_prof']; ?></td>
														<td><?php echo $infoProf_adminVu['email_prof']; ?></td>
														<td><?php echo $infoProf_adminVu['qualification_prof']; ?></td>
														<td><?php echo $infoProf_adminVu['contact_prof']; ?></td>
														<td><?php echo $infoProf_adminVu['sexe_prof']; ?></td>
														<td><a href="home.php?information=../../../views/professeur/formEdit&id_prof=<?php echo $infoProf_adminVu['id_prof']; ?>" class="btn btn-info">Modifier</a>
														    <a href="home.php?information=../../../views/professeur/supprimer&id_prof=<?php echo $infoProf_adminVu['id_prof']; ?>" class="btn btn-danger">Supprimer</a></td>
													</tr>
							<?php $numéro++;} } else {?>

                                                
														<td colspan="12"><strong>Nous n'avons aucun prof pour l'instant</strong></td>
							<?php }  ?>
												</tbody> 
										
											</table> 
										</div>
								</div>
											
						
					</div>
					<!--//graph-visual-->
				</div>