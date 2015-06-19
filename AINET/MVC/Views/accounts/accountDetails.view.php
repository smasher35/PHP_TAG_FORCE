<?php ?>
<?php require('MVC/Views/headerFooter/header.view.php'); ?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias-->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="#goTop"><strong id="subNavButtons"></strong></a></li>
					<li role="presentation"><a href="#contact"><strong id="subNavButtons"></strong></a></li>
				</ul>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</div> <!--fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding-top" id="goTop"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<!-- grelha central -->
			<div class="col-md-12">
				<div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						    <div class="row align-center noPadding">
                                <div class="col-md-12">
                                    <div class="center">
                                        <h2>Account <strong>Details</strong></h2>
                                        <div class="line">
                                            <hr>
                                        </div>
                                    </div>
                                </div>




						</div>
						<input type="hidden" name="account_id" id="account_id" value="<?= $account->id ?>"/>
                            <!-- FORM AREA ESQUERDA -->
                            <div class="col-md-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Name</strong> </div>
                                        <div class="panel-body">
                                             <p><?= $account->name ?></p>
                                          </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Email</strong> </div>
                                        <div class="panel-body">
                                             <?= $account->email ?>
                                          </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Position</strong> </div>
                                        <div class="panel-body">
                                             <?= $account->position ?>
                                          </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Role</strong> </div>
                                        <div class="panel-body">
                                                <?php if ($account->role == 1) { ?>
    <p>Editor</p>
<?php } elseif ($account->role == 4) { ?>
    <p>Administrator</p>
<?php } else { ?>
    <p>Author</p>
<?php } ?>
                                        </div>
                                    </div><!-- Fecha Panel-Body -->
                            </div><!-- Fecha col-md-5 -->

                            <!-- FIM AREA ESQUERDA -->

                            <!-- FORM AREA CENTRAL -->
                            <div class="col-md-4">
                                        <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Institution</strong> </div>
                                        <div class="panel-body">
                                             <?= $institutionController->getInstitutionName($account->institution_id) ?>
                                          </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Personal Data</strong> </div>
                                        <div class="panel-body">
                                            <h3><span class="label label-default">Photo URL</span><br></h3>
                                             <?= $account->photo_url ?>
                                             <hr>
                                             <h3><span class="label label-default ">Personal Webpage</span><br></h3>
                                             <?= $account->profile_url ?>
                                             <hr>
                                             <h3><span class="label label-default">Alternative Email</span><br></h3>
                                             <?= $account->alt_email ?>

                                        </div>
                                    </div>
                            </div><!-- Fecha col-md-4 -->
                            <!-- FIM AREA CENTRAL -->

                            <!-- FORM AREA DIREITA -->
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><strong>Account Status</strong> </div>
                                        <div class="panel-body">
                                            <?php if ($account->flags == 0) { ?>
    <button class="btn btn-warning btn-block">Inactive</button>
<?php } elseif ($account->flags == 1) { ?>
    <button class="btn btn-success btn-block">Active</button>
<?php } else { ?>
    <button class="btn btn-danger btn-block">Deleted</button>
<?php } ?>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-3">
                                <div class="row">
                                 <p><h4><span>Profile Image</span></h4></p>
                                    <div class="input-group">
                                        <img src="<?= $accountController->getProfileImgUrl($account->id) ?>" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>

                            <!-- FIM AREA DIREITA -->

                            <!-- AREA INFERIOR -->
							<div class="row">
							    <div class="col-md-12 align-right text-right">

                                    <hr>
                                    <a href="accountsBrowsing.php" <button type="button" class="btn btn-primary"><span <i class="fa fa-sign-out"></i></span> Close</button></a>

                                </div>


                            </div>

					</div>
					<div class="panel-footer">
						<p id="panelFooter">&copy PHP TAG Force - 2015</a></p>
					</div>
				</div>
			</div><!-- Fecha a col-md-12 -->
		</div>
	</div>
</div>


<?php require('MVC/Views/headerFooter/footer.view.php'); ?>