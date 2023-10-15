<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
        <li><a href="home.php?information=information">Acceuil</a></li>
            <li class="active">Liste des emplois du temps</li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">
        <h2 class="inner-tittle">Liste des emplois du temps</h2>
        <div class="graph">

        <form method="post">
			<select name="niveau" id="selector1" class="form-control1">
				<option>
                    Choisir un niveau
                </option>
                    <?php 
                        $niveau = $emploi_du_tempsController->niveau();
                        while($niv = $niveau->fetch_assoc())
                        {
                    ?>

				<option value="<?php echo $niv['niveau']; ?>">
                    <?php
                        echo $niv['niveau']; 
                    ?>
                </option>
													<?php }?>
										

		    </select>
								
                                        <input type="submit" name="emploi_du_temps" class="btn red" value="Voir les emplois du temps">
		</form>	


            <div class="content tab">

            <?php if(isset($_POST['emploi_du_temps']))
										{   
											$niveau = $_POST['niveau'];
										    $edt_admin = $emploi_du_tempsController->listes_emploi_du_temps($niveau);
											
										?>


            <div class="tables">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Heure de début</th>
                        <th>Heure de fin</th>
                        <th>Module</th> <!-- Nouvelle colonne -->
                        </tr>
                    </thead>
                    <tbody> 
													
                                                    <?php $listes_emploi_du_temps = $emploi_du_tempsController->listes_emploi_du_temps($niveau);
                                                        $t_sn = 1;
                                                        while($listes_emploi_du_temps_ok = $listes_emploi_du_temps->fetch_assoc())					{
                                                            
                                                        
                                                                            ?>						
                                                                    
                                                                            
                                                                            <tr>
                                                                                <th scope="row"><?php echo $t_sn; ?></th>

                                                                                <td><?php echo $listes_emploi_du_temps_ok['date']; ?></td>                                                                           
                                                                                <td><?php echo $listes_emploi_du_temps_ok['start_time']; ?></td>
                                                                                <td><?php echo $listes_emploi_du_temps_ok['end_time']; ?></td>
                                                                                <td><?php echo $listes_emploi_du_temps_ok['nom']; ?></td>
                                                                                <td>
                                                                                    <a href="home.php?information=../../../views/emploi_du_temps/formEdit&id_emploi_du_temps=<?php echo $listes_emploi_du_temps_ok['id_emploi_du_temps']; ?>" class="btn green">Modifier</a>
                                                                                    <a href="home.php?information=../../../views/emploi_du_temps/supprimer&id_emploi_du_temps=<?php echo $listes_emploi_du_temps_ok['id_emploi_du_temps']; ?>" class="btn red">Supprimer</a>
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                    <?php $t_sn++; } } else { ?>


                                                                        <td colspan="12">Aucune note trouvée
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
