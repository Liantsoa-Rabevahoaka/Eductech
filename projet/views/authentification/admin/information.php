<div class="outter-wp">
                    <div class="tab-main">
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-title">Bienvenue, 
                                    <?php echo $info_admin['nom_admin']; ?></h2>
                                <div class="graph">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-1" class="icon-shop"><span>Information Admin</span></a></li>
											<li><a href="#section-2" class="icon-shop"><span>Statistiques</span></a></li>
                                            <li><a href="#section-3" class="icon-shop"><span>Changer les données de l'admin</span></a></li>
                                        </ul>
                                    </nav>    
                                        <div class="content tab">

										<section id="section-1">
											<div class="mediabox">
												<strong>Information personnelle</strong>
												<p> <strong>Nom: </strong>
													<?php echo $info_admin['nom_admin']; ?>
												</p>
												

											</div>
											<div class="mediabox">
												<strong>Contact</strong>
												<p>	<strong>Email:</strong>
		                                        <?php echo $info_admin['email_admin']; ?>	
											</div>
										</section>
                                        
										
										<section id="section-2">
										<div class="container">
											<div class="card" style="width: 13rem;">
											<img src="../../../Assets/images/graduate-avatar.png" alt="image" width="60px">
												<!-- <i class="fas fa-users fa-2x text-info"></i> -->
												<div class="card-body">
												<h5 class="card-title">Etudiants</h5>
												<p class="card-text"><?php echo $nombre_etudiant_ok;?></p>
												
												</div>
											</div>

											<div class="card" style="width: 13rem;">
											<img src="../../../Assets/images/teacher.png" alt="image" width="60px">
												<div class="card-body">
												<h5 class="card-title">Professeurs</h5>
												<p class="card-text"><?php echo $nombre_prof_ok;?></p>
												
												</div>
											</div>
											<div class="card" style="width: 13rem;">
											<img src="../../../Assets/images/books.png" alt="image" width="60px">
												<div class="card-body">
												<h5 class="card-title">Modules</h5>
												<p class="card-text"><?php echo $nombre_modules_ok;?></p>
												</div>
											</div>

											<div class="card" style="width: 13rem;">
											<img src="../../../Assets/images/calendar.png" alt="image" width="60px">
												<div class="card-body">
												<h5 class="card-title">Emploi du temps</h5>
												<p class="card-text"><?php echo $nombre_edt_ok;?></p>
												</div>
											</div>
											</div>
										</section>


										<section id="section-3">
												<div class="">
													<div class="form-body text-center">
														<form class="form-horizontal text-center" method="post">
															<div><p>Veuillez entrer votre nom Utilisateur et mot de passe 	pour modifier votre information.</p></div>
															<div class="row-sm-3"> 
																<div class="form-group"> <input type="text" class="form-control" id="" name="nomUtilisateurAdmin_actuel" placeholder="Nom utilisateur actuel" required> </div>
															</div>
															<div class="row-sm-3">
																<div class="form-group"> <input type="password" class="form-control" id="" name="motDePasseAdmin_actuel" placeholder="Mot de passe actuel"> </div>
															</div>
															
															<div class="text-center"> 
																<input type="submit" class="btn btn-default" name="Check_info" value ="Valider les infos">
															</div>	
														</form>
													</div>
												</div>
														<?php 
														if(isset($_POST['Check_info']))
															{
																$authAdminController -> select();
															}
														?>
													
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


