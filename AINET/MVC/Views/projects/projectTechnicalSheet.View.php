<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro -2130628
	 * Date: 30/04/2015
	 * Time: 15:55
	 */
-->
<?php require('MVC/Views/headerFooter/header.view.php');?>

<div class="alt5">
	<div class="row" id="jumbotronSheet" align="center">
		<div class="container">
			<div class="col-md-8">
				<div class="jumbotron">
						<h2><strong>TECHNICAL SHEET!</strong></h2>
						<h3><p class="lead">Titulo do Projecto PHP TAG FORCE</p></h3>
						<p class="lead">Pequeno briefing</p>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<div class="alt1">
	<div class="row">
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- IMAGES CAROUSEL SLIDER -->
				<div id="CarouselTechSheet" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#CarouselTechSheet" data-slide-to ="0" class="active"></li>

						</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="Images/Projeto1.jpg" alt="Projecto Hardware" class="img-responsive">
							<div class="carousel-caption">
								<h3>Projecto Hardware</h3>
								<a href="#" class="btn btn-primary">Tell Me More...</a>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>



<?php require('MVC/Views/headerFooter/footer.view.php');?>

