<div class="outter-wp">
		<!--sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
                <li><a href="home.php?information=information">Acceuil</a></li>
				<li class="active">Listes des notes</li>
			</ol>
        </div>

        <!--//sub-heard-part-->
        <div class="graph-visual tables-main">
            <h2 class="inner-tittle">Listes des notes</h2>
            <div class="graph">
            
            <form method="post">
                                        <select name="classe" id="selector1" class="form-control1">
                                            <option>Choisissez une classe</option>
                                                <?php 
                                                    $classe = $etudiantController -> classe_etudiant();
                                                    while($classeDesEtudiants = $classe->fetch_assoc())
                                                {
                                                ?>
                                            <option value="<?php echo $classeDesEtudiants['classe_etudiant']; ?>"><?php echo $classeDesEtudiants['classe_etudiant']; ?></option>
                                            <?php }?>

                                        </select>

								        <select name="examen" id="selector1" class="form-control1">
							                <option>Choisir un examen</option>
													<?php 
												        $exam = $noteController -> examen();
													    while($examen = $exam->fetch_assoc())
													{
                                                    ?>

							                <option value="<?php echo $examen['examen']; ?>"><?php echo $examen['examen']; ?></option>
													<?php }?>
										</select>

                                        <select name="infoNote" id="selector1" class="form-control1">
							                <option>Choisir un matière</option>
													<?php 
												        $matiere = $noteController -> module();
													    while($module = $matiere ->  fetch_assoc())
													{
                                                    ?>
												
							                <option value="<?php echo $module['id_module'];?>"><?php echo $module['nom']; ?></option>
													<?php }?>
										</select>
								
                                        <input type="submit" name="notes" class="btn red" value="Voir les notes">
			</form>	

            <div class="content tab">

            <?php if(isset($_POST['notes']))
										{   
                                            $classe = $_POST['classe'];
                                            $examen = $_POST['examen'];
											$module = $_POST['infoNote'];
										    $infoNote = $noteController -> read($classe, $examen, $module);
                                            $nombreNote = $infoNote -> num_rows;
										?>

                                        
                                            <div class="graph">
                                            
								            <div class="tables">
                                                <table class="table table-bordered "> 
                                                <thead>
                                                        <tr>
                                                            <th>Rang</th>
                                                            <th>Numéro de l'élève</th>
                                                            <th>Nom et prénoms</th>
                                                            <th>Valeur de la note</th>
                                                            <th>Note avec coefficient</th>
                                                            <th>Appreciation</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                <?php 
                                                
                                                    if($nombreNote>0){
													$numero = 1;
													while($infoNoteVu = $infoNote->fetch_assoc()){
							                ?>	
                                        
                                            <div><p>Notes des: <?php echo $infoNoteVu['classe_etudiant'] ?></p></div>
                                            <div><p><?php echo $infoNoteVu['examen'] ?></p></div>
                                            <div><p>Module: <?php echo $infoNoteVu['nom'] ?></p></div>
                                                   

                                                    		
                                                    
                                                        <tr>
                                                            <th scope="row"><?php echo $numero; ?></th>
                                                            <td><?php echo $infoNoteVu['id_etudiant'] ?></td>
                                                            <td><?php echo $infoNoteVu['nom_etudiant'] ?></td>
                                                            <td><?php echo $infoNoteVu['valeur_note'] ?>/20</td>
                                                            <?php 
																$note =   $infoNoteVu['valeur_note'] * $infoNoteVu['coef'];
                                                                $totalNote = 20 * $infoNoteVu['coef'];
																?>
                                                            <td><?php echo "$note"?>/<?php echo "$totalNote" ?></td>
                                                            <td><?php echo $infoNoteVu['appreciation'] ?></td>
                                                            <td><a href="home.php?information=../../../views/notes/formEdit&id_note=<?php echo $infoNoteVu['id_note'] ?>" class="btn btn-info">Modifier</a>
                                                            <a href="home.php?information=../../../views/notes/supprimer&id_note=<?php echo $infoNoteVu['id_note'] ?>" class="btn btn-danger">Supprimer</a></td>
                                                        </tr>
                                                    <?php $numero++; } } else {?>

                                                
																		<td colspan="12">Aucune note trouvée
																			</td>
																		<?php 
										}   
                                    }?>
                                                    </tbody> 

															
                                                            </table> 
                                                        </div>
                                                </div>
                                                            
                                        
                                    </div>
                                    <!--//graph-visual-->
                                </div>