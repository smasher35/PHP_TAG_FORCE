<?php require('MVC/Views/headerFooter/header.view.php');?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-12 col-lg-offset-5">
					<ul class="nav nav-pills">
						<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
						<li role="presentation"><a href="#projectsList"><strong id="subNavButtons">Projects</strong></a></li>
						<li role="presentation"><a href="#contact"><strong id="subNavButtons">Contact</strong></a></li>
					</ul>
			</div>

		</div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<div class="alt5">
	<!-- Page Content -->
	<div class="container">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-12">
				<div class="center">
				    <hr>
                    <h2 class="text-center">Projects <strong>Browser</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
	            </div>
			</div>
		</div>
		<!-- /.row -->

        <?php foreach($projects as $project) {  ?>
            <div class="row ">
                <div class="col-md-4 text-center">
                    <td align="center"><img  class="img-circle img-project-thumbnail" src="<?=$projectController->getProjectImage($project->id)?>"></td>
                </div>
                <div class="col-md-8">
                    <h3><?= $project->name ?></h3>
                    <h4><?= $accountController->getUserName($project->created_by)?></h4>
                    <p><?= $project->description ?></p>
                    <a class="btn btn-success" href="projectDetails.php?project_id=<?=$project->id?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <hr>
        <?php } ?>
		 <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

	</div>
</div>

<?php require('MVC/Views/headerFooter/footer.view.php');?>