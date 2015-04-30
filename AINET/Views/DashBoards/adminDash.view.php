
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
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
					<li role="presentation"><a href="#myCarousel"><strong id="subNavButtons">Projects</strong></a></li>
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
		<h1><b>Accounts - User Management!</b></h1>
		<p class="lead">Gestão das contas e users</p>
		<p><a href="#"  class="btn btn-primary btn-lg">New Account</a></p>
	</div>
</div>


<?php require('Views/headerFooter/footer.view.php');?>