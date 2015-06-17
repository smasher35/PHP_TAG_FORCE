<?php require('MVC/Views/headerFooter/header.view.php');?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="container">
			    <div class="row">
			    <div class="col-md-4 align-right"></div>
                    <div class="col-md-4 align-center">
                        <div class="nav">
                            <?php if(isset($_GET['search'])) { ?>
                                <h4 class="text-center"><strong>Showing:</strong> <?=count($projects)?> <strong>results for: <?=$searchString?></strong></h4>
                            <?php } ?>
			            </div>
                    </div>

			        <div class="col-md-4 align-right">
						<form action="projects.php"method="get">
                            <h5 class="sort-elements">
                                <select name="orderBy">
                                    <option <?php if ($orderBy == "name") {echo "selected";}?> value="name">Name</option>
                                    <option <?php if ($orderBy == "created_by") {echo "selected";}?> value="created_by">Author</option>
                                </select>

                                <select name="order">
                                    <option <?php if ($order == "ASC") {echo "selected";}?> value="ASC">Ascendent</option>
                                    <option <?php if ($order == "DESC") {echo "selected";}?> value="DESC">Descendent</option>
                                </select>

                                 <button type="submit" class="btn btn-success btn-sm">Sort <span class="glyphicon glyphicon-triangle-right"></span></button>
                             </h5>

                        </form>
					 </div>
                </div>
            </div>
        </div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<div class="alt5 padding">
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
                    <li><a href="projects.php?page=<?=$page-1?>">&laquo;</a></li>
                    <?php for($i=1 ; $i <= $lastPage ; $i++) {?>
                        <?php if ($i == $page) { ?>
                            <li class="active"><a href="projects.php?page=<?=$i?>"><?=$i?></a></li>
                        <?php } else {?>
                            <li><a href="projects.php?page=<?=$i?>"><?=$i?></a></li>
                        <?php } ?>
                    <?php } ?>
                    <li><a href="projects.php?page=<?=$page+1?>">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.row -->


        <hr>

	</div>
</div>

<?php require('MVC/Views/headerFooter/footer.view.php');?>