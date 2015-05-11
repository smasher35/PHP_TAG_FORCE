<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 23/04/2015
	 * Time: 12:01
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
						<li role="presentation"><a href="#projectsList"><strong id="subNavButtons">Projects</strong></a></li>
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
<div class="row " id="jumboTronProjetcBrowser">
	<div class="container">
		<h1><b>Projects Browser!</b></h1>
		<p class="lead">Listagem dos Projectos existentes em base de dados</p>
		<p class="lead">Alfredo Rosa - Paulo Penicheiro - Ruben Miguel</p>
	</div>
</div>

<a class="padding" id="projectsList"></a>
<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="panel panel-primary panel-responsive" id="panelProjectsExplorer">
				<!-- Default panel contents -->
				<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects List </strong></h3></div>

					<!-- Table
						<!--TODO: foreach a percorrer os projectos existentes -->
					<table class="table table-stripped table-hover table-responsive">
						<tr>
							<th class="text-center">Thumb</th>
							<th class="text-center">Title</th>
							<th class="text-center">Area</th>
							<th class="text-center">Date</th>
							<th class="text-center">Author</th>
							<th class="text-center">Details</th>

						</tr>
						<tr>
							<td align="center">Img.png</td>
							<td>Programação Cuda</td>
							<td>Computação Gráfica</td>
							<td align="center">12.01.2015</td>
							<td>Alfredo Rosa</td>
							<td align="center"><a href="projectTechnicalSheet.php" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-book"></span></a></td>
						</tr>
						<tr>
							<td align="center">Img.png</td>
							<td>Plataforma de Gestão Informática</td>
							<td>Programação WEB</td>
							<td align="center">13.01.2015</td>
							<td>Paulo Penicheiro</td>
							<td align="center"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-book"></span></button></td>

						</tr>

						<tr>
							<td align="center">Img.png</td>
							<td>GTA XLI</td>
							<td>JOGOS PC</td>
							<td align="center">12.01.2015</td>
							<td>Ruben Miguel</td>
							<td align="center"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-book"></span></button></td>

						</tr>


					</table>
				<div class="panel-footer" align="center">
					<div class="btn-toolbar" role="toolbar" align="center">
						<div class="btn-group" align="center">
							<button type="button" class="btn btn-primary btn-sm ">First
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

<div>
	<?php require('MVC/Views/headerFooter/footer.view.php');?>
</div>
