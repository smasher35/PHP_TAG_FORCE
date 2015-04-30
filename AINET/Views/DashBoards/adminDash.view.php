
<!--/**
	* Created by PhpStorm.
	* User: Paulo Penicheiro - 2130628
	* Date: 27/04/2015
	* Time: 15:02
	*/
-->
<?php require('Views/headerFooter/header.view.php');?>

<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
					<li role="presentation"><a href="#userManagement"><strong id="subNavButtons">User Managment</strong></a></li>
					<li role="presentation"><a href="#contact"><strong id="subNavButtons">Contact</strong></a></li>
				</ul>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<!-- JUMBOTRON -->
<div class="row " id="jumboTronAccountsBrowser">
	<div class="container">
		<h1><b>Accounts - User Management!</b></h1>
		<p class="lead">Gestão das contas e users</p>
		<p><a href="#"  class="btn btn-primary btn-lg">New Account</a></p>
	</div>
</div>

<a class="padding" id="userManagement"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="panel panel-primary panel-responsive" id="panelProjectsExplorer">
				<!-- Default panel contents -->
				<div class="panel-heading"><h3 class="panel-title text-center"><strong>User Managment </strong></h3></div>

				<!-- Table
						<!--<?php/*TODO: foreach a percorrer as contas existentes - tabela e botões serão desenhados dentro do foreach*/;?> -->
				<table class="table table-stripped table-hover table-responsive">
					<tr>
						<th class="text-center">Select</th>
						<th class="text-center">User Name</th>
						<th class="text-center">Institution</th>
						<th class="text-center">Position</th>
						<th class="text-center">Website</th>
						<th class="text-center">Operations</th>
					</tr>

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>Aplha.360@hotmail.com</td>
						<td>IPL- Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>smasher35@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>ruben.miguel@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>


				</table>
				<div class="panel-footer" align="center">
					<div class="center">
						<div class="btn-toolbar" role="toolbar" align="center">
							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary btn-sm">First
								<button type="button" class="btn btn-primary btn-sm">Previous
							</div>

							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary btn-sm">1
								<button type="button" class="btn btn-primary btn-sm">2
								<button type="button" class="btn btn-primary btn-sm">3
								<button type="button" class="btn btn-primary btn-sm">4
								<button type="button" class="btn btn-primary btn-sm">5
								<button type="button" class="btn btn-primary btn-sm">6
								<button type="button" class="btn btn-primary btn-sm">7
								<button type="button" class="btn btn-primary btn-sm">8
								<button type="button" class="btn btn-primary btn-sm">9
								<button type="button" class="btn btn-primary btn-sm">10
							</div>

							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary btn-sm">Next
									<button type="button" class="btn btn-primary btn-sm">Last
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('Views/headerFooter/footer.view.php');?>