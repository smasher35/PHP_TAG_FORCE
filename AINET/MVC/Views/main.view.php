<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row noPadding" id="subNavBar" xmlns="http://www.w3.org/1999/html">
			<div class="container">
				<div class="col-md-12 col-lg-offset-3" align="center">
					<ul class="nav nav-pills">
						<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
						<li role="presentation"><a href="#highlights"><strong id="subNavButtons">Highlights</strong></a></li>
						<li role="presentation"><a href="#recentProjects"><strong id="subNavButtons">Recent Projects</strong></a></li>
						<li role="presentation"><a href="#lastUpdate"><strong id="subNavButtons">Last Updates</strong></a></li>
						<li role="presentation"><a href="#theTeam"><strong id="subNavButtons">The Crew</strong></a></li>
						<li role="presentation"><a href="#contactUs"><strong id="subNavButtons">Contact</strong></a></li>
					</ul>
				</div>
			</div>
		</div> <!-- fecha a sub navigation Bar -->
	</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header><!-- fecha o <header> localizado no ficheiro header.php -->

<!-- JUMBOTRON
============================================================================-->
<section id="goTop">
    <div class="alt1">
        <div class="row" id="jumbotron">
            <div class="container">
                <h1><strong>Project Portfolio Platform</strong></h1>
                <p class="lead">Model your ideas, share your View, Control the world.</p>
              </div>
          </div>
      </div>
  </section>
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

	</ol>

        <div class="carousel-inner">
            <?php $carrousellCounter =0?>
            <?php foreach($recentProjects as $project) { ?>
                <?php if ($carrousellCounter == 0) { ?>
                    <div class="item active">
                        <img src="<?=$projectController->getProjectImage($project->id)?>" class="carousel-inner img-responsive block" alt="<?=$project->name?> Image">
                        <div class="carousel-caption">
                            <h3><?=$project->name?></h3>
                            <a href="projectDetails.php?project_id=<?=$project->id?>" class="btn btn-primary button-padding">View Project</a>
                        </div>
                    </div>
                <?php } else {?><!-- fecha if -->
                    <div class="item">
                        <img src="<?=$projectController->getProjectImage($project->id)?>" class=" carousel-inner img-responsive" alt="<?=$project->name?> Image">
                        <div class="carousel-caption">
                            <h3><?=$project->name?></h3>
                            <a href="projectDetails.php?project_id=<?=$project->id?>" class="btn btn-primary button-padding">View Project</a>
                        </div>
                    </div>
                <?php }?><!-- fecha else -->
                <?php $carrousellCounter++ ?>
            <?php }?><!-- fecha for -->
                <a class="carousel-control left" href="#myCarousel" data-slide = "prev">
                    <span class="icon-prev"></span>
                </a>

                <a class="carousel-control right" href="#myCarousel" data-slide = "next">
                    <span class="icon-next"></span>
                </a>

        </div>

	<a href="#" id="about"></a>
</div>

<!-- RECENT PROJECTS
	==========================================-->
<!-- TODO: query à base de dados e recolher os 4 projectos mais recentes -->
<a class="padding" id="recentProjects"></a>
<div class="alt5">
	<div id="tf-services" class="text-center">
		<div class="container">
			<div class="center">
				<h2>Highlights <strong>Recent Projects</strong></h2>
				<div class="line">
					<hr>
				</div>
				<div class="clearfix"></div>
				<small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
			</div>
			<div class="space"></div>
			<div class="row">

                <?php foreach($recentProjects as $project) { ?>
                    <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <br>
                    <a href="projectDetails.php?project_id=<?=$project->id?>" class="btn btn-primary button-padding">View Project</a>
                    <h4><strong><?= $project->name?></strong></h4>

                    <p><?= $project->description?></p>
                    </div>
                <?php }?>
			</div>
		</div>
	</div>
</div>

<a class="padding" id="theTeam"></a>
	<!-- Team Page
		==========================================-->
<div id="tf-team" class="text-center list-inline">
	<div class="alt7">
		<div class="overlay">
			<div class="container">
				<div class="center">
					<h2>Meet <strong>The Crew</strong></h2>
					<div class="line">
						<hr>
					</div>
					<div id="team">
						<div class="row">
							<div class="col-md-4">
								<div class="thumbnail">
									<img src="storage/Images/crew/paulo.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Paulo Penicheiro</h3>
										<p>PHP TAG FORCE - CEO / Founder</p>
										<p>Instituto Politécnico de Leiria - ESTG.</p>
									</div>
								</div>
							</div><!-- col-md-4 -->

							<div class="col-md-4">
								<div class="thumbnail">
									<img src="storage/Images/crew/ruben.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Ruben Miguel</h3>
										<p>PHP TAG FORCE CEO - LAYOUT GURU</p>
										<p>Instituto Politécnico de Leiria - ESTG.</p>
									</div>
								</div>
							</div><!-- col-md-4 -->

							<div class="col-md-4">
								<div class="thumbnail">
									<img src="storage/Images/crew/alfredo.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Alfredo Rosa</h3>
										<p>PHP TAG FORCE CEO - DATABASE MASTER - BUG SNATCHER</p>
										<p>Instituto Politécnico de Leiria - ESTG.</p>
									</div>
								</div><!-- thumbnail -->
							</div><!-- col-md-4 -->
						</div><!-- row -->
					</div><!-- team -->
				</div><!-- center -->
			</div><!-- container -->
		</div><!-- overlay -->
	</div><!-- alt7 -->
</div> <!-- tf-team -->


<!-- LAST UPDATE PROJECTS - 2 COLUMNS
 =====================================================================================-->
	<!-- TODO: query à base de dados e recolher 3 projectos indicados pelo Editor -->
<div class="alt5 padding-Top" id="lastUpdate">
    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="center">
                        <h2 class="text-center">Last Updated <strong>Projects</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">

                        <?php foreach ($lastUpdatedProjects as $project) { ?>
                                <li>
                                    <div class="  timeline-image">
                                        <img src="<?=$projectController->getProjectImage($project->id)?>" class=" img-circle lupdate-img img-responsive" alt="<?=$project->name?>">
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h3><strong><?=$project->name?></strong></h3>
                                            <h4 class="subheading"><?= $accountController->getUserName($project->id)?></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted"><?= $project->description ?></p>
                                            <br>
                                            <a href="projectDetails.php?project_id=<?=$project->id?>" class="btn btn-primary button-padding">View Project</a>
                                        </div>
                                    </div>
                                </li>
                        <?php } ?>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>PHP
                                    <br>TAG
                                    <br>FORCE</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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

					<form action="contactUs.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="text-left">
										<label class="align-left" for="contactEmail1">Email address</label>
									</div>
									<input type="email" class="form-control" id="contactEmail1" name="contactEmail" placeholder="Enter email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="text-left">
										<label for="contactName">Name</label>
									</div>
									<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="text-left">
								<label for="contactMessage">Message</label>
							<div class="text-left">
							<textarea class="form-control" id="contactMessage" name="contactMessage"rows="3"></textarea>
						</div>
						<div class="text-right button-padding">
							<button type="submit" name="submit" id="submit" class="btn tf-btn btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>