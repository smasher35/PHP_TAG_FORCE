<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
		<div class="row" id="subNavBar">
			<div class="container">
				<div class="col-md-3"></div>
				<div class="col-md-6" align="center">
					<ul class="nav nav-pills">
						<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
						<li role="presentation"><a href="#highlights"><strong id="subNavButtons">Highlights</strong></a></li>
						<li role="presentation"><a href="#recentProjects"><strong id="subNavButtons">Recent Projects</strong></a></li>
						<li role="presentation"><a href="#editorChoice"><strong id="subNavButtons">Editor's Choice</strong></a></li>
						<li role="presentation"><a href="#contactUs"><strong id="subNavButtons">Contact</strong></a></li>
					</ul>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div> <!-- fecha a sub navigation Bar -->
	</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<!-- JUMBOTRON
============================================================================-->
<a class="padding" id="goTop"></a>
<div class="alt1">

	<div class="row" id="jumbotron">
		<div class="container">
			<h1><strong>PROJECT AINET!</strong></h1>
			<p class="lead">Aqui há-de nascer o grandioso projecto dos fabulosos PHP TAG FORCE</p>
			<p class="lead">Alfredo Rosa - Paulo Penicheiro - Ruben Miguel</p>
			<p><a href="http://www.google.pt"  class="btn btn-primary btn-lg">Google Me</a></p>
		</div>
	</div>
</div>

<!-- IMAGES CAROUSEL SLIDER
 ============================================================================-->
<a class="padding" id="highlights"></a>
<div class="row">

<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to ="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to ="1"></li>
		<li data-target="#myCarousel" data-slide-to ="2"></li>
		<li data-target="#myCarousel" data-slide-to ="3"></li>
		<li data-target="#myCarousel" data-slide-to ="4"></li>
		<li data-target="#myCarousel" data-slide-to ="5"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item active">
			<img src="Images/Projeto1.jpg" alt="Projecto Hardware" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto Hardware</h3>
				<a href="#" class="btn btn-primary">Tell Me More...</a>
			</div>

		</div>

		<div class="item">
			<img src="Images/Projeto2.jpg" alt="Projecto Kano" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto Kano</h3>
				<a href="#" class="btn btn-primary">Tell Me More...</a>
			</div>
		</div>

		<div class="item">
			<img src="Images/Projeto3.jpg" alt="Projecto HTML5" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto HTML5</h3>
				<a href="#" class="btn btn-primary">Tell Me More...</a>
			</div>
		</div>

		<div class="item">
			<img src="Images/Projeto4.jpg" alt="Projecto CSS3" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto CSS3</h3>
				<a href="#" class="btn btn-primary">Tell Me More...</a>
			</div>
		</div>

		<div class="item">
			<img src="Images/Projeto5.jpg" alt="Projecto Laravel" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto Laravel</h3>
				<a href="http://www.laravel.com" class="btn btn-primary">Tell Me More...</a>
			</div>
		</div>

		<div class="item">
			<img src="Images/Projeto6.jpg" alt="Projecto PHP" class="img-responsive">
			<div class="carousel-caption">
				<h3>Projecto PHP + MySQL</h3>
				<a href="#" class="btn btn-primary">Tell Me More...</a>
			</div>
		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide = "prev">
			<span class="icon-prev"></span>
		</a>

		<a class="carousel-control right" href="#myCarousel" data-slide = "next">
			<span class="icon-next"></span>
		</a>
	</div>
	<a href="" id="about"></a>
</div>
</div>

<!-- 3 COLUMN PROJETCS HIGHLIGHTS
 =========================================================================-->
<a class="padding" id="recentProjects"></a>
<div class="alt4">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary" id="pan1">
					<div class="panel-body">
					<h2 class="text-center">Projecto 1</h2>
					<p class="text-justify">	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<a href="#" class="btn btn-info btn-block">Tell Me More...</a>
				</div></div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary" id="pan1">
					<div class="panel-body">
						<h2 class="text-center">Projecto 2</h2>
						<p class="text-justify">	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<a href="#" class="btn btn-info btn-block">Tell Me More...</a>
				</div></div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary" id="pan1">
					<div class="panel-body">
						<h2 class="text-center">Projecto 3</h2>
						<p class="text-justify">	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<a href="#" class="btn btn-info btn-block" >Tell Me More...</a>
				</div></div>
			</div>
		</div>
	</div>
	<a href="" id="projects"></a>
</div>

<!-- EDITOR'S CHOICE - 2 COLUMNS
 =====================================================================================-->
<a class="padding" id="editorChoice"></a>
<div class="container padding" >
	<div class="row padding">
		<div class="col-md-6">
			<img src="Images/python.png" class="img-circle img-responsive img-block" alt="Projecto em Python">
		</div>
		<div class="col-md-6">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
	<hr />

	<div class="row padding">
		<div class="col-md-6">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="col-md-6">
			<img src="Images/cube.jpg" class="img-circle img-responsive img-center" alt="Projecto em C#">
		</div>
	</div>
	<hr />
	<div class="row padding">
		<div class="col-md-6">
			<img src="Images/php.jpeg" class="img-circle img-responsive" alt="Projecto em Php">
		</div>
		<div class="col-md-6">
			<p class="text-justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
	<hr />
</div>

<!-- Contact Section
    ==========================================-->
<a id="contactUs"></a>
<div class="alt6">
	<div id="tf-contact" class="text-center">
		<div class="container">
			<div class="row padding-Bottom">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title center">
						<h2>Feel free to <strong>contact us</strong></h2>
						<div class="line">
							<hr>
						</div>
						<div class="clearfix"></div>
						<small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
					</div>

					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="text-left">
										<label class="align-left" for="inputEmail1">Email address</label>
									</div>
									<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="text-left">
										<label for="inputName">Name</label>
									</div>
									<input type="password" class="form-control" id="inputName" placeholder="Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="text-left">
								<label for="exampleInputEmail1">Message</label>
							<div class="text-left">
							<textarea class="form-control" rows="3"></textarea>
						</div>
						<div class="text-right button-padding">
							<button type="submit" class="btn tf-btn btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>