<?php require('Views/header.view.php');?>
<div class="alt1">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="padding"></div>
				<div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						<div class="page-header">
							<h3>Log in</h3>
						</div>
						<form>
							<div class="form-group">
								<label for="inputEmail1">Email address</label>
								<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="inputPassword1">Password</label>
								<input type="password" class="form-control" id="inputPassword1" placeholder="Password">
								<a href="#" ><br><p class="textAlignRight">Forgot Password?</p></a>
							</div>

							<div class="checkbox">
								<label>
									<input type="checkbox">Remember Me
								</label>
							</div>
							<hr>
							<button type="submit" class="btn btn-primary">Log me in</button>
						</form>

					</div>
					<div class="panel-footer">
							<p id="panelFooter">Don't Have an Account? - <a href="#">Sign Up?</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
	</div>
</div>

<div class="alt2">
	<?=require('Views/footer.view.php');?>
</div>



