<div class="outter-wp">
		<!--sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
                <li><a href="home.php?information=information">Acceuil</a></li>
				<li class="active">Listes des étudiants</li>
			</ol>
        </div>

        <!--//sub-heard-part-->
        <div class="graph-visual tables-main">
            <h2 class="inner-tittle">Listes des étudiants</h2>
            <div class="graph">
            
            <form method="post">
								        <select name="classe_etudiant" id="selector1" class="form-control1">
							                <option>Choisir une classe</option>
													<?php 
                                                       
                                                        $etudiant = $etudiantController->classe_etudiant();

													    while($classe_etudiant = $etudiant->fetch_assoc())
                                                        {
                                                    ?>

							                <option value="<?php echo $classe_etudiant['classe_etudiant']; ?>"><?php echo $classe_etudiant['classe_etudiant'];?></option>
													<?php } ?>
										</select>

                                        <input type="submit" name="voir_etudiants" class="btn red" value="Voir les étudiants">
			</form>	
            
            <div class="content tab">

            <?php if(isset($_POST['voir_etudiants']))
										{   

											$classe_etudiant = $_POST['classe_etudiant'];
										    $ListesEtudiants = $etudiantController->read($classe_etudiant);
											$nombresEtudiant = $ListesEtudiants->num_rows;
										?>

                                        
                                            <div class="graph">
								            <div class="tables">
                                                <table class="table table-bordered "> 
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Photo</th>
                                                            <th>Numéro de l'élève</th>
                                                            <th>Nom et prénoms</th>
                                                            <th>email</th>
                                                            <th>classe</th>
                                                            <th>sexe</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 

                                                    		
                                            <?php 
                                            if($nombresEtudiant>0){
								            $numero = 1;
								            while($Voir_ListesEtudiants = $ListesEtudiants->fetch_assoc()){
							                ?>	
                                                        <tr>
                                                            <th scope="row"><?php echo $numero; ?></th>
                                                            <?php $cheminImages = "../../../assets/images/etudiant";?> <?php echo "<td><img src='" . $cheminImages . $Voir_ListesEtudiants['image_etudiant'] . "' alt='Aucun image' width='60px' ></td>"; ?> 
                                                            <td><?php echo $Voir_ListesEtudiants['id_etudiant'] ?></td>
                                                            <td><?php echo $Voir_ListesEtudiants['nom_etudiant'] ?></td>
                                                            <td><?php echo $Voir_ListesEtudiants['email_etudiant'] ?></td>
                                                            <td><?php echo $Voir_ListesEtudiants['classe_etudiant'] ?></td>
                                                            <td><?php echo $Voir_ListesEtudiants['sexe_etudiant']?></td>
                                                            <td><a href="home.php?information=../../../views/etudiants/formEdit&id_etudiant=<?php echo $Voir_ListesEtudiants['id_etudiant'] ?>" class="btn btn-info">Modifier</a>
														        <a href="home.php?information=../../../views/etudiants/supprimer&id_etudiant=<?php echo $Voir_ListesEtudiants['id_etudiant'] ?>" class="btn btn-danger">Supprimer</a></td>
                                                        </tr>
                                                    <?php $numero++; } } else {?>

                                                
																		<td colspan="12">Aucune étudiant trouvée
																			</td>
																		<?php 
										}  
                                    } ?>
                                                    </tbody> 

															
                                                            </table> 
                                                        </div>
                                                </div>
                                                            
                                        
                                    </div>
                                    <!--//graph-visual-->

                                                        </div>
                                                </div>
                                                            
                                        
                                    </div>
                                    <!--//graph-visual-->
                                </div>