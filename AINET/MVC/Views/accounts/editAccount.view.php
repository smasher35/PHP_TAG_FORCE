<?php require('MVC/Views/headerFooter/header.view.php');?>
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
						<div class="page-header">
						    <div class="col-md-10 align-left">
						        <h3>Edit Account</h3>
						    </div>
						    <div class="col-md-2 align-right">
						        <div class="input-group">
						            <img src="<?= $accountController->getProfileImgUrl($account->id)?>" class="img-thumbnail">
                                </div>
                            </div>

						</div>
						<form action="editAccount.php" method="post" >
                            <!-- FORM AREA ESQUERDA -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputName"><span><b class="asterisco">*</b> Name</h3></span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" name="name" id="inputName" value="<?= $account->name?>" placeholder="Enter name">
                                    </div>

                                    <label for="inputEmail1"><span><b class="asterisco">*</b> Email address</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" name="email" id="inputEmail1" value="<?= $account->email?>" placeholder="Enter email">
                                    </div>




                                    <label for="inputPassword"><span><b class="asterisco">*</b> Password</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        <input type="password" class="form-control" name="password" id="inputPassword" value="<?= $account->email?>" placeholder="Password">
                                    </div>
                                    <label for="inputretypePassword"><span><b class="asterisco">*</b> Retype Password</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        <input type="password" class="form-control" name="retypePass" id="inputretypePassword" placeholder="retype Password">
                                    </div>
                                </div>

                            </div>
                            <!-- FIM AREA ESQUERDA -->

                            <!-- FORM AREA CENTRAL -->
                            <div class="col-md-4">
                                <div class="form-group">
                                        <label for="inputInstitution"><span><b class="asterisco">*</b> Institution</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-education"></span></span>
                                            <select class="form-control" name="institution" id="institution" value="<?= $account->institution?>">
                                                <?php foreach ($institutions as $institution) { ?>
                                                    <option value="<?= $institution->id?>"><?= $institution->name?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <label for="inputPosition"><span><b class="asterisco">*</b> Position</span> </label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-briefcase"></span></span>
                                            <input type="text" class="form-control" name="position" id="inputPosition" value="<?= $account->position?>" placeholder="Position in the institution">
                                        </div>

                                    <label for="phototUrl">Photo URL</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-picture"></span></span>
                                        <input type="text" class="form-control" name="photoUrl" id="phototUrl" value="<?= $account->photo_url?>" placeholder="Enter Photo Url">
                                    </div>
                                    <label for="inputUrl">Personal WebPage</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                                        <input type="text" class="form-control" name="inputUrl" id="inputUrl" value="<?= $account->profile_url?>" placeholder="Enter Personal Webpage Url">
                                    </div>

                                    <label for="inputOptionalEmail1">Alternative Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" name="altEmail" id="inputOptionalEmail1" value="<?= $account->alt_email?>" placeholder="Enter alternative email">
                                    </div>
                                </div>

                            </div>
                            <!-- FIM AREA CENTRAL -->

                            <!-- FORM AREA DIREITA -->
                            <div class="col-md-3">
                                <div class="row">

                                        <p><h4><span><b class="asterisco">*</b> Account Roles</span></h4></p>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-sunglasses"></span></span>
                                            <select class="form-control" name="role" id="role">
                                                <option value="4" <?php if ($account->role == 4){echo "selected";}?>>Administrador</option>
                                                <option value="1" <?php if ($account->role == 1){echo "selected";}?>>Editor</option>
                                                <option value="2" <?php if ($account->role == 1){echo "selected";}?>>Autor</option>
                                            </select>
                                        </div>


                                        <p class="text-center"><h4><span><b class="asterisco">*</b> Account Status</span></h4></p>
                                        <label class="radio-inline"><input type="radio" name="statusRadio" value="1" <?php if ($account->flags == 1){echo "checked";}?>>Active </label>
                                        <label class="radio-inline"><input type="radio" name="statusRadio" value="0" <?php if ($account->flags == 0){echo "checked";}?>>Disabled </label><hr></div>

                            </div>
                            <!-- FIM AREA DIREITA -->
							<hr>
                            <div class="row">
                                <div class="col-md-12 col-md-offset-1">
                                    <span><b class="asterisco">*</b> - Required Fields </span>
                                </div>
                            </div>
							<hr>
							<div class="col-md-6-rightAlign">
								<a class="btn btn-success" href="dashBoards.php"><span class="glyphicon glyphicon-arrow-left" ></span> Cancel</a>
								<!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button> -->
								<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Submit</button>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<p id="panelFooter">&copy PHP TAG Force - 2015</a></p>
					</div>
				</div>
			</div><!-- Fecha a col-md-12 -->
		</div>
	</div>
</div>


<?php require('MVC/Views/headerFooter/footer.view.php');?>