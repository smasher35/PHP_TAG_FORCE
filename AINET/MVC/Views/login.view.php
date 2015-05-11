<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 20/04/2015
	 * Time: 21:14
	 */
 -->
<?php require('MVC/Views/headerFooter/header.view.php');?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
					<li role="presentation"><a href="#contact"><strong id="subNavButtons">Contact</strong></a></li>
				</ul>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<div class="alt1">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						<div class="page-header">
							<h3>Log in</h3>
						</div>
						<form>
							<div class="form-group">
								<label for="inputEmail1">Email address</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
									<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
								</div>
							</div>


							<div class="form-group">
								<label for="inputPassword1">Password</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
									<input type="password" class="form-control" id="inputPassword1" placeholder="Password">
								</div>
								<a href="#" ><p class="textAlignRight">Forgot Password?</p></a>
							</div>


							<div class="checkbox">
								<label>
									<input type="checkbox">Remember Me
								</label>
							</div>
							<hr>
							<a class="btn btn-success btn-block" href="index.php"><span class="glyphicon glyphicon-arrow-left" ></span> Back</a>
							<!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button> -->
							<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-lock"></span> Login</button>
						</form>
					</div>
					<div class="panel-footer">
							<p id="panelFooter">&copy PHP TAG Force - 2015</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
	</div>
</div>

<?=require('MVC/Views/headerFooter/footer.view.php');?>
