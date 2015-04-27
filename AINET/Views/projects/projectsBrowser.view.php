<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 23/04/2015
	 * Time: 12:01
	 */
 -->

<?php require('Views/headerFooter/header.view.php');?>



<!-- JUMBOTRON -->
<div class="row " id="jumboTronProjetcBrowser">
	<div class="container">
		<h1><b>Projects Browser!</b></h1>
		<p>Listagem dos Projectos existentes em base de dados</p>
		<p>Alfredo Rosa - Paulo Penicheiro - Ruben Miguel</p>
	</div>
</div>

<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="panel panel-primary">
				<!-- Default panel contents -->
				<div class="panel-heading"><h3 class="panel-title text-center">Projects List</h3></div>

					<!-- Table
						<!--<?php/*TODO: foreach a percorrer os projectos existentes*/;?> -->
					<table class="table">
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
							<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

						</tr>
						<tr>
							<td align="center">Img.png</td>
							<td>Plataforma de Gestão Informática</td>
							<td>Programação WEB</td>
							<td align="center">13.01.2015</td>
							<td>Paulo Penicheiro</td>
							<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

						</tr>

						<tr>
							<td align="center">Img.png</td>
							<td>GTA XLI</td>
							<td>JOGOS PC</td>
							<td align="center">12.01.2015</td>
							<td>Ruben Miguel</td>
							<td align="center"><button class="btn btn-default small"><span class="glyphicon glyphicon-book"></span></button></td>

						</tr>


					</table>
				<div class="panel-footer" align="center">
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

<div>
	<?php require('Views/headerFooter/footer.view.php');?>
</div>
