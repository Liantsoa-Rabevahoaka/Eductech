<div class="outter-wp">
                    <div class="tab-main">
                        <div class="tab-inner">
                            <div id="tabs" class="tabs">
                                <h2 class="inner-title">Bienvenue, 
                                    <?php echo $info_admin['nom_admin']; ?></h2>
                                <div class="graph">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-1" class="icon-shop"><span>Modification des informations admin</span></a></li>
                                        </ul>
                                    </nav>    
                                        <div class="content tab">
                                            <section id="section-1">
                                                    <div class="">
                                                        <div class="form-body text-center">
                                                            <form class="form-horizontal text-center" method="post">
                                                                <div class="form-group">
                                                                    <label for="nom" class="col-sm-2 control-label">Nom et Prénoms: </label>
                                                                    <div class="col-sm-9"> <input type="text" class="form-control" id="nom" name="nom_admin" value="<?php echo $info_admin['nom_admin']; ?>" required>  </div>
					                                            </div>
                                                                <div class="form-group">
                                                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                                                    <div class="col-sm-9"> <input type="email" class="form-control" id="email" name="email_admin" value="<?php echo $info_admin['email_admin']; ?>" required> </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nomutilisateur_admin" class="col-sm-2 control-label">Nom d'Utilisateur</label>
                                                                    <div class="col-sm-9"> <input type="text" class="form-control" id="nomutilisateur_admin" name="nomUtilisateurAdmin_nouveau" value="<?php echo $info_admin['nomUtilisateur_admin']; ?>" required> </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="motDePasse_admin" class="col-sm-2 control-label">Mot de Passe</label>
                                                                    <div class="col-sm-9"> <input type="password" class="form-control" id="motDePasse_admin" name="motDePasseAdmin_nouveau"> </div>
                                                                </div>
                                                                
                                                                <div class="text-center"> 
                                                                    <input type="submit" class="btn btn-default" name="Ok" value="Modifier">
                                                                </div>	

                                                                <?php 
                                                                    if(isset($_POST['Ok']))
                                                                        {
                                                                            include __DIR__ . ("/../../../controllers/Authentification.php");
                                                                        
                                                                            $authAdminController = new adminController;
                                                                            $nomU_mdpOk = $authAdminController -> update();
                                                                            
                                                                        }
                                                                    ?>
                                                            </form>
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


