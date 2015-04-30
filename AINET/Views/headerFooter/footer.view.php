<div class="alt2">
		<footer>
<!-- CONTACT US -->
			<div class="col-md-3">
				<p id="contact"><h4>Contact Us </h4></p>
				<form>
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="name" class="form-control" id="inputName" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label for="inputEmail1">Email address</label>
						<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="inputComment">Message:</label>
						<textarea class="form-control" rows="5" id="inputComment" placeholder="write your message"></textarea>
					</div>
					<!-- Sumit Button -->
					<button class="btn btn-success btn-block"><span class="glyphicon glyphicon-circle-arrow-right"> Submit</span></button>
				</form>
			</div>
<!-- SOCIAL NETWORKS -->
			<div class="col-md-3">
				<p><h4>Follow us on Social Networks</h4></p>
				<a href="#"><i class="fa fa-facebook-square fa-2x socialNetworksIcons"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-2x socialNetworksIcons"></i></a>
				<a href="#"><i class="fa fa-google-plus-square fa-2x socialNetworksIcons"></i></a>
				<a href="#"><i class="fa fa-linkedin-square fa-2x socialNetworksIcons"></i></a>
				<a href="#"><i class="fa fa-vimeo-square fa-2x socialNetworksIcons"></i></a>
				<a href="#"><i class="fa fa-youtube-square fa-2x socialNetworksIcons"></i></a>
			</div>
<!-- THE CREW -->
			<div class="col-md-3">
				<p><h4>Newsletter</h4></p>
				<br>
				<div class="form-group">
					<label for="inputEmail1">Subscribe our Monthly Newsletter</label>
					<div class="input-group">
						<input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
						<span class="input-group-btn">
				                    <button class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span></button>
						</span>
					</div>
				</div>
			</div>
<!-- THE CREW -->
			<div class="col-md-3">
				<p><h4>The Crew</h4></p>
				</hr>
				<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-1"><h5>&copy; PHP TAG FORCE 2015</h5> </button>
				</hr>
				<p><h5>Powered by:</h5></p>
				<i class="fa fa-html5 fa-2x socialNetworksIcons"></i>
				<i class="fa fa-css3 fa-2x socialNetworksIcons"></i>
				<i class="fa fa-github-square fa-2x socialNetworksIcons"></i>
				<i class="fa fa-windows fa-2x socialNetworksIcons"></i>
<!-- BOTÃO GO TOP -->
				<br/> <a href="#goTop" class="go-top"><h3 class="glyphicon glyphicon-chevron-up"></h3></a>
			</div>
			<!-- <div class="row" > para dar uma pequena margem no fundo  -->
			<div class="row"></div>
<!-- Janela MODAL -- The Crew -- -->
			<div class="modal fade" id="modal-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">The Crew</h3>
						</div>
						<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-heading"<h3 class="panel-title">
									The Programmers</h3>
								</div>

							<table class="table">
								<tr>
									<td><img src="Images/crew/paulo.jpg" class="img-circle img-responsive" id="imgTable"></td>
									<td>Paulo Penicheiro<br>2130628</td>
								</tr>

								<tr>
									<td><img src="Images/crew/ruben.jpg" class="img-circle img-responsive" id="imgTable"></td>
									<td>Ruben Miguel</td>
								</tr>

								<tr>
									<td><img src="Images/crew/alfredo.jpg" class="img-circle img-responsive" id="imgTable"></td>
									<td>Alfredo Rosa</td>
								</tr>

							</table>

							<div class="panel-footer">
								&copy; PHP TAG FORCE - All rights reserved
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<a href="" class="btn btn-primary" data-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
<!-- FIM JANELA MODAL -->
		</footer>
</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="Bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript"><?=require('javaScript/smoothPageTransition.js');?></script>
		<script>
			//chama a função que permite o deslocar suave entre seccções
			<?=require('javaScript/smoothScrolling.js');?>
			//chama a função do botão lateral para ir para o topo
			<?=require('javaScript/goTopButton.js');?>
		</script>
	</body>
</html>