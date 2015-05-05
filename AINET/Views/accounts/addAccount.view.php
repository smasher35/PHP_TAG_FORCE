<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 04/05/2015
	 * Time: 10:26
	 */
-->
<?php require('Views/headerFooter/header.view.php');?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias-->
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

</div> <!--fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<!-- grelha esquerda -->
			<div class="col-md-3"></div>
			<!-- grelha central -->
			<div class="col-md-6">
				<div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						<div class="page-header">
							<h3>New Account</h3>
						</div>
						<form action="" >
							<div class="form-group">
								<label for="inputName">Name</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
									<input type="name" class="form-control" id="inputName" placeholder="Enter name">
								</div>

								<label for="inputEmail1">Email address</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
								</div>
							</div>


							<div class="form-group">
								<label for="inputPassword">Password</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
									<input type="password" class="form-control" id="inputPassword" placeholder="Password">
								</div>
								<label for="inputretypePassword">Retype Password</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
									<input type="password" class="form-control" id="inputretypePassword" placeholder="retype Password">
								</div>
							</div>

							<div class="form-group">
								<label for="inputInstitution">Institution</label>


								<div class="input-group">

									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-education"></span></span>
									<select class="form-control">
										<option>Instituto Politécnico de Leiria - ESTG</option>
										<option>Instituto Politécnico de Leiria - ESECS</option>
										<option>Instituto Politécnico de Leiria - ESAD.CR</option>
										<option>Instituto Politécnico de Leiria - ESTM</option>
										<option>Instituto Politécnico de Tomar</option>
									</select>
								</div>
								<label for="inputPassword1">Position </label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-briefcase"></span></span>
									<input type="password" class="form-control" id="inputPosition" placeholder="Position in the institution">
								</div>
							</div>

							<div class="form-group">
								<label for="inputUrl">Personal WebPage</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
									<input type="name" class="form-control" id="inputUrl" placeholder="Enter Url">
								</div>

								<label for="inputOptionalEmail1">Alternative Email</label>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="email" class="form-control" id="inputOptionalEmail1" placeholder="Enter alternative email">
								</div>
							</div>

							<hr>
							<p><h4>Account Roles</h4></p>
							<div class="checkbox">
								<label> <input type="checkbox" id="admin" name="admin">Administrator </label>
								<label> <input type="checkbox" id="editor" name="editor">Editor </label>
								<label> <input type="checkbox" id="author" name="author">Author </label>
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
			</div>
			<!-- grelha direita -->
			<div class="col-md-3"></div>
		</div>
	</div>
</div>


<?php require('Views/headerFooter/footer.view.php');?>