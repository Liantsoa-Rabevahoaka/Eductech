<div class="outter-wp">
				<!--sub-heard-part-->
					<div class="sub-heard-part">
					<ol class="breadcrumb m-b-0">
					<li><a href="home.php?information=information">Acceuil</a></li>
						<li class="active">Listes des modules</li>
					</ol>
					</div>
				<!--//sub-heard-part-->
				<div class="graph-visual tables-main">
						<h2 class="inner-tittle">Listes des modules</h2>
						
							<div><p id="changeOk"></p></div>
											<div class="graph">
										<div class="tables">
									
											<table class="table table-bordered "> 
											
												<thead>
													<tr>
														
                                                        <th>Id_modules</th> 
																				<th>Nom</th> 
																				<th>Coefficient</th> 
																				<th>Durée</th>
																				<th>Professeur</th>
																				<th>Action</th> 
													</tr>
												</thead>
												<tbody> 
																			<?php 
																			$modules = $moduleController->listes_modules();
																			$t_sn = 1;
                                                                            
																			while($module =$modules->fetch_assoc())					{
																			?>						
																					
																					<tr>
																						<td><?php echo $module['id_module']; ?></td>
																						<td><?php echo $module['nom']; ?></td>
																						<td><?php echo $module['coef']; ?></td>
																						<td><?php echo $module['duree']; ?></td>
																						<td><?php echo $module['nomComplet_prof']; ?></td>
																						<td><a href="home.php?information=../../../views/modules/formEdit&id_module=<?php echo $module['id_module']; ?>" class="btn btn-info">Modifier</a>
														    								<a href="home.php?information=../../../views/modules/supprimer&id_module=<?php echo $module['id_module']; ?>" class="btn btn-danger">Supprimer</a></td>
                                                                                        
                                                                                     
																					</tr>
																			<?php $t_sn++; } ?>
																	</tbody> 
										
											</table> 
										</div>
								</div>
											
						
					</div>
					<!--//graph-visual-->
				</div>