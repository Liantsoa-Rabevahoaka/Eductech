<div class="outter-wp">
                    <div class="tab-main">
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-title">Bienvenue, 
                                    <?php echo $afficherInfo_et['nom_etudiant']; ?></h2>
                                <div class="graph">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-1" class="icon-shop"><span>Information</span></a></li>
                                            <li><a href="#section-2" class="icon-shop"><span>Professeurs</span></a></li>
                                            <li><a href="#section-3" class="icon-shop"><span>Emploi du temps</span></a></li>
                                        </ul>
                                    </nav>    
                                        <div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong>Information personnelle</strong>
												<p> <strong>Nom: </strong>
													<?php echo $afficherInfo_et['nom_etudiant']; ?>
												</p>
												<p><strong>Classe: </strong>
													<?php echo $afficherInfo_et['classe_etudiant']; ?>
												</p>
												<p><strong>Sexe: </strong>
													<?php echo $afficherInfo_et['sexe_etudiant']; ?>
												</p>
												<p> <strong>Né(e) le:</strong>
													<?php echo $afficherInfo_et['dateDeNaissance_etudiant']; ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>Contact Details</strong>

												<p> <strong>Addresse:</strong>
													<?php echo $afficherInfo_et['adresse_etudiant']; ?>
												</p>
												<p> <strong>Nom d'Utilisateur:</strong>
													<?php echo $afficherInfo_et['nomUtilisateur_etudiant']; ?>
												</p>
											</div>
											<div class="mediabox">
												<strong>Informations sur les parents</strong>
												<p><strong>Nom du père: </strong>
													<?php echo $afficherInfo_et['pere_etudiant']; ?>
												</p>
												<p><strong>Nom de la mère: </strong>
													<?php echo $afficherInfo_et['mere_etudiant']; ?>
												</p>
												<p><strong>Contact des Parents: </strong>
													<?php echo $afficherInfo_et['contactParent_etudiant']; ?>
												</p>
											</div>
										</section>
                                        
                                        <section id="section-2">
												<div class="graph">
															<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>ID</th> 										
																			<th>Photo</th> 										
																			<th>Nom</th> 
																			<th>Email</th> 
																			<th>Matière enseigné</th>
																			<th>Adresse</th>
																			
																		</tr> 
																	</thead> 
																	<tbody>
																		
																	<?php 
																		$sn = 1;
																		$infoProf_et0 = $ProfController-> professeur();
																		$nbreProf0 = $infoProf_et0->num_rows;
																		if($nbreProf0>0){
																			while($infoProf0 = $infoProf_et0->fetch_assoc())		{ 
																					?>
																					
																					<tr>
																						<td><?php echo $infoProf0['id_prof'] ?></td> 
																						<?php $cheminImages = "../../../assets/images/prof";?> <?php echo "<td><img src='" . $cheminImages . $infoProf0['image_prof'] . "' alt='Aucun image' width='50px'></td>"; ?> 													
																						<td><?php echo $infoProf0['nomComplet_prof'] ?></td> 
																						<td><?php echo $infoProf0['email_prof'] ?></td> 
																						<td><?php echo $infoProf0['nom'] ?></td> 
																						<td><?php echo $infoProf0['sexe_prof'] ?></td> 													
																						<td><?php  ?></td> 
																					
																						<td></td> 
																						
																					</tr> 
																					<?php $sn++; } }  else {?>
																						<td colspan="12">Aucune Prof trouvée </td>
																		<?php 
																		}   
																		?>
																	</tbody> 
																</table>															
																		</table>
																	</div>
																
												
													</div>
											
										
										</section>
										<section id="section-3">
											<div class="graph">
											
								

            <div class="content tab">
			
            <div class="tables">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Heure de debut</th>
                            <th>Heure de fin</th>
                            <th>Module</th> <!-- Nouvelle colonne -->
                        </tr>
                    </thead>
                    <tbody> 
													
                                                    <?php 
														$niveau = $afficherInfo_et['classe_etudiant'];
														$listes_emploi_du_temps = $emploi_du_tempsController->listes_emploi_du_temps($niveau);
                                                        $t_sn = 1;
                                                        while($listes_emploi_du_temps_ok = $listes_emploi_du_temps->fetch_assoc())					
														{
                                                        
                                                        
                                                                            ?>						
                                                                    
                                                                            
                                                                            <tr>
                                                                                <th scope="row"><?php echo $t_sn; ?></th>

                                                                                <td><?php echo $listes_emploi_du_temps_ok['date']; ?></td>                                                                           
                                                                                <td><?php echo $listes_emploi_du_temps_ok['start_time']; ?></td>
                                                                                <td><?php echo $listes_emploi_du_temps_ok['end_time']; ?></td>
                                                                                <td><?php echo $listes_emploi_du_temps_ok['nom']; ?></td>
                                                                               
                                                                               
                                                                            </tr>
                                                                    <?php $t_sn++; } ?>

                                                                        </tbody> 
                </table>
            </div>
        </div>
										</section>
									</div>
									<!-- /content -->
								</div>
								<!-- /tabs -->

							</div>
							<script src="../../../Assets/js/cbpFWTabs.js"></script>
							<script>
								new CBPFWTabs(document.getElementById('tabs'));
							</script>
							<div class="clearfix"> </div>
						</div>
					</div>
                                    
                        
                    
                </div>
        </div>