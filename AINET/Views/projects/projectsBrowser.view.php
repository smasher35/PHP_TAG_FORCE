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
<div class="jumbotron" id="jumboTronProjetcBrowser">
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

					<!-- Table -->
					<table class="table">
						<tr>
							<th class="text-center">Thumb</th>
							<th class="text-center">Title</th>
							<th class="text-center">Area</th>
							<th class="text-center">Date</th>
							<th class="text-center">Author</th>
						</tr>
						<tr>
							<td>Img.png</td>
							<td>Programação Cuda</td>
							<td>Computação Gráfica</td>
							<td>12.01.2015</td>
							<td>Alfredo Rosa</td>

						</tr>


					</table>
				<div class="panel-footer">
					<div class="btn-toolbar" role="toolbar" aria-label="...">
						<div class="btn-group" role="group" aria-label="1">1</div>
						<div class="btn-group" role="group" aria-label="2">2</div>
						<div class="btn-group" role="group" aria-label="3">3</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div>
	<?php require('Views/headerFooter/footer.view.php');?>
</div>
