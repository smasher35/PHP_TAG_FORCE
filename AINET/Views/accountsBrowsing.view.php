<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 23/04/2015
	 * Time: 12:01
	 */
 -->

<?php require('Views/headerFooter/header.view.php');?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
					<li role="presentation"><a href="#accountsList"><strong id="subNavButtons">Accounts</strong></a></li>
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
<!-- JUMBOTRON -->
<div class="row " id="jumboTronAccountsBrowser">
	<div class="container">
		<h1><b>Accounts Browser!</b></h1>
		<p class="lead">Listagem das diversas contas existentes em base de dados</p>
		<p class="lead">Alfredo Rosa - Paulo Penicheiro - Ruben Miguel</p>
	</div>
</div>

<a class="padding" id="accountsList"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="panel panel-primary panel-responsive" id="panelProjectsExplorer">
				<!-- Default panel contents -->
				<div class="panel-heading"><h3 class="panel-title text-center"><strong>Accounts List </strong></h3></div>

				<!-- Table
						<!--<?php/*TODO: foreach a percorrer os projectos existentes*/;?> -->
				<table class="table table-stripped table-hover table-responsive">
					<tr>
						<th class="text-center">Thumb</th>
						<th class="text-center">User Name</th>
						<th class="text-center">Institution</th>
						<th class="text-center">Position</th>
						<th class="text-center">Website</th>
						<th class="text-center">Show Projects</th>

					</tr>
					<tr>
						<td align="center">Img.png</td>
						<td>Aplha.360@hotmail.com</td>
						<td>IPL- Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

					</tr>
					<tr>
						<td align="center">Img.png</td>
						<td>smasher35@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

					</tr>

					<tr>
						<td align="center">Img.png</td>
						<td>ruben.miguel@gmail.com</td>
						<td>IPL - Leiria</td>
						<td align="center">Student</td>
						<td>-</td>
						<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

					</tr>


				</table>
				<div class="panel-footer" align="center">
					<div class="center">
						<div class="btn-toolbar" role="toolbar" align="center">
							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary">First
								<button type="button" class="btn btn-primary">Previous
							</div>

							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary">1
								<button type="button" class="btn btn-primary">2
								<button type="button" class="btn btn-primary">3
								<button type="button" class="btn btn-primary">4
								<button type="button" class="btn btn-primary">5
								<button type="button" class="btn btn-primary">6
								<button type="button" class="btn btn-primary">7
								<button type="button" class="btn btn-primary">8
								<button type="button" class="btn btn-primary">9
								<button type="button" class="btn btn-primary">10
							</div>

							<div class="btn-group" align="center">
								<button type="button" class="btn btn-primary">Next
									<button type="button" class="btn btn-primary">Last
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div>
	<?php require('Views/headerFooter/footer.view.php');?>
</div>
