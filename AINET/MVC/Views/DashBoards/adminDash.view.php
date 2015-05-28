
<!--/**
	* Created by PhpStorm.
	* User: Paulo Penicheiro - 2130628
	* Date: 27/04/2015
	* Time: 15:02
	*/
-->
<?php require('MVC/Views/headerFooter/header.view.php');?>

<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8 align-center">
					<ul class="nav nav-pills subNavButtons">
							<li role="presentation"><a href="addAccount.php"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Account</a></li>
							<li role="presentation"><a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a></li>
							<li role="presentation"><a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Disable Selected</a></li>
					</ul>
		</div>
		<div class="col-md-2"></div>
	</div>

</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->

</header>

<a class="padding" id="goTop"></a>
<!-- JUMBOTRON -->
<div class="row" id="jumboTronAccountsBrowser">
	<div class="container">
		<h1><b>Accounts - User Management!</b></h1>
		<p class="lead">Gestão das contas e users</p>
	</div>
</div>

<a class="padding" id="userManagement"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="row padding-Top">
				<div class="col-md-6"></div>
				<div class="col-md-6 col-md-6-rightAlign" >
					<!--
					<a href="addAccount.php"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Account</a>
					<a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a>
					<a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Disable Selected</a>
					-->
				</div>
			</div>

			<div class="panel panel-primary panel-responsive" id="panelProjectsExplorer">

				<!-- Default panel contents -->
				<div class="panel-heading"><h3 class="panel-title text-center"><strong>User Managment </strong></h3></div>
				<!-- Table
						<!--<?php/*TODO: foreach a percorrer as contas existentes - tabela e botões serão desenhados dentro do foreach*/;?> -->
				<table class="table table-stripped table-hover table-responsive">
					<tr>
						<th class="text-center"><input type="checkbox"> Select</th>
						<th class="text-center">User Name</th>
						<th class="text-center">Institution</th>
						<th class="text-center">Position</th>
						<th class="text-center">Website</th>
						<th class="text-center">Operations</th>
					</tr>

					<?php foreach ($users as $user) { ?>
						<tr>
							<td align="center"><input type="checkbox"></td>
							<td><?=$user->email?></td>
							<td><?=$user->institution_id?></td>
							<td align="center"><?=$user->position?></td>
							<td><?=$user->profile_url?></td>
							<td align="center">
								<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
								<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
								<button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="bottom" title="Details"><span class="glyphicon glyphicon-book"></span></button>
								<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
							</td>
						</tr>
					<?php } ?>
				</table>
				<div class="panel-footer">
					<!-- Pagination -->
					<div class="row text-center">
						<div class="col-lg-12">
							<ul class="pagination">
								<li>
									<a href="#">&laquo;</a>
								</li>
								<li class="active">
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#">5</a>
								</li>
								<li>
									<a href="#">6</a>
								</li>
								<li>
									<a href="#">7</a>
								</li>
								<li>
									<a href="#">8</a>
								</li>
								<li>
									<a href="#">9</a>
								</li>
								<li>
									<a href="#">10</a>
								</li>
								<li>
									<a href="#">&raquo;</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /.row -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('MVC/Views/headerFooter/footer.view.php');?>