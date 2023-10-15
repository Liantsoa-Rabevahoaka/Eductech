<div class="outter-wp">
                    <div class="tab-main">
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-title">Bienvenue, 
                                    <?php echo $afficherInfo_et['nom_etudiant']; ?></h2>
                                <div class="graph">
										<div>
													<p> <strong>Nom: </strong>
														<?php echo $afficherInfo_et['nom_etudiant']; ?>
													</p>
													<p><strong>Classe: </strong>
														<?php echo $afficherInfo_et['classe_etudiant']; ?>
													</p>

														<?php 
															    $id_etudiant = $_GET['id_etudiant'];
																$examen = $_GET['examen'];

																$infoNote = $noteController -> readOnEtudiant($id_etudiant, $examen);
																$nombreNote = $infoNote -> num_rows;
														?>
														
														<div class="graph">
														<div class="tables">
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>Matière</th> 
																			<th>Coefficient</th> 
																			<th>Note obtenue</th> 
																			<th>Note avec Coefficient</th>
																			<th>Appréciation</th> 
																		</tr> 
																	</thead> 
																	<tbody>
										<?php
											if($nombreNote>0){
											while($infoNoteVu = $infoNote -> fetch_assoc()){
							                ?>	
                                            <div><p>Votre note: <strong><?php echo $infoNoteVu['examen'] ?></strong></p></div>
                                                   <tr>
                                                            <td><?php echo $infoNoteVu['nom'] ?></td>
                                                            <td><?php echo $infoNoteVu['coef'] ?></td>
                                                            <td><?php echo $infoNoteVu['valeur_note'] ?>/20</td>
															<?php 
																$note =   $infoNoteVu['valeur_note'] * $infoNoteVu['coef'];
																$totalNote = 20 * $infoNoteVu['coef'];
																?>
                                                            <td><?php echo $note ?>/<?php echo $totalNote ?></td>
                                                            <td><?php echo $infoNoteVu['appreciation'] ?></td>
                                                        </tr>
                                                    <?php } } else {?>

                                                
																		<td colspan="12">Aucune note trouvée
																			</td>
																			<?php 
										}   
                                    ?>
																	</tbody> 
																</table>		
																	</div>
																</div>
																</div>