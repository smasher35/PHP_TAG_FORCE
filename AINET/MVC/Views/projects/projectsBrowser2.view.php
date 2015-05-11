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
<div class="alt5">
	<!-- Page Content -->
	<div class="container">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Projects Browser <small>List</small> </h1>
			</div>
		</div>
		<!-- /.row -->

		<!-- Project 1 -->
		<div class="row ">
			<div class="col-md-4 text-center">
				<img class=" img-circle img-responsive" src="Images\projectThumb.jpg" alt="thumbnail">
			</div>
			<div class="col-md-8">
				<h3>Programação Cuda</h3>
                <h4>Autor: Alfredo Rosa</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-success" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!--  End Project 1 -->
		<hr>

		<!-- Project 2 -->
		<div class="row">
			<div class="col-md-4">
				<img class="img-circle img-responsive" src="Images\projectThumb.jpg" alt="thumbnail">
			</div>
			<div class="col-md-8">
				<h3>Plataforma PHP</h3>
                <h4>Autor: Paulo Penicheiro</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-success" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!-- End Project 2 -->
		<hr>

		<!-- Project 3 -->
		<div class="row">
			<div class="col-md-4">
				<img class="img-circle img-responsive" src="Images\projectThumb.jpg" alt="thumbnail">
			</div>
			<div class="col-md-8">
				<h3>Modelação 3D</h3>
                <h4>Autor: Ruben Miguel</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-success" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!-- End Project 3 -->
		<hr>
		<!-- Project 4 -->
		<div class="row">
			<div class="col-md-4">
				<img class="img-circle img-responsive" src="Images\projectThumb.jpg" alt="thumbnail">
			</div>
			<div class="col-md-8">
				<h3>Porn Animal Farm</h3>
                <h4>Autor: André Barata</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-success" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!-- End Project 4 -->
		<hr>
		 <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">6</a>
                    </li>
                    <li>
                        <a href="#">7</a>
                    </li>
                    <li>
                        <a href="#">8</a>
                    </li>
                    <li>
                        <a href="#">9</a>
                    </li>
                    <li>
                        <a href="#">10</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

	</div>
</div>

<?php require('MVC/Views/headerFooter/footer.view.php');?>