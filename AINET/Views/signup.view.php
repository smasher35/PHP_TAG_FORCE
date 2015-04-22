<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 21/04/2015
	 * Time: 12:14
	 */
 -->
<?php require('Views/headerFooter/header.view.php');?>

<div class="alt1">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="padding"></div>
				<div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						<div class="page-header">
							<h3>Sign Up</h3>
						</div>
						<form>
							<div class="form-group">
								<label for="inputName">Name</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
									<input type="name" class="form-control" id="inputName" placeholder="Enter name">
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail1">Email address</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
								</div>
							</div>

							<div class="form-group">
								<label for="inputReEmail1">Re-Enter Email address</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="reemail" class="form-control" id="inputreEmail1" placeholder="Re-Enter email">
								</div>
							</div>



							<div class="form-group">
								<label for="inputPassword1">Password</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
									<input type="password" class="form-control" id="inputPassword1" placeholder="Password">
								</div>
							</div>

							<div class="form-group">
								<label for="inputRePassword1">Re-Enter Password</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
									<input type="repassword" class="form-control" id="inputRePassword1" placeholder="Re-Enter Password">
								</div>
							</div>



							<div class="checkbox">
								<label>
									<input type="checkbox">Request Newsletter and ocasional updates
								</label>
							</div>
							<hr>
							<a class="btn btn-success btn-block" href="index.php"><span class="glyphicon glyphicon-arrow-left" ></span> Back</a>
							<!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button> -->
							<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-lock"></span> Register</button>
							<p class="text-center">By signing up you agree to our terms of use, privacy and cookie policy...</p>
						</form>

					</div>
					<div class="panel-footer">
						<p id="panelFooter">Have an Account? - <a href="login.php">Login</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

<div class="alt2">
	<?=require('Views/headerFooter/footer.view.php');?>
</div>