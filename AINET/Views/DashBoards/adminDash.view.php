
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
				<ul class="nav nav-pills subNavButtons">
					<li role="presentation"><a href="addAccount.php"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Account</a></li>
					<li role="presentation"><a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a></li>
					<li role="presentation"><a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Disable Selected</a></li>
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

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>Aplha.360@hotmail.com</td>
						<td>IPL- Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="bottom" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>smasher35@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="bottom" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>

					<tr>
						<td align="center"><input type="checkbox"></td>
						<td>ruben.miguel@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center">
							<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
							<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="bottom" title="Details"><span class="glyphicon glyphicon-book"></span></button>
							<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Disable"><span class="glyphicon glyphicon-ban-circle"></span></button>
						</td>
					</tr>


				</table>
				<div class="panel-footer">
					<div class="text-center">
						<div class="btn-toolbar pagination-center" role="toolbar">
							<div class="btn-group align-center" >
								<button type="button" class="btn btn-primary btn-sm">First
								<button type="button" class="btn btn-primary btn-sm">Previous
							</div>

							<div class="btn-group align-center">
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

							<div class="btn-group align-center">
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