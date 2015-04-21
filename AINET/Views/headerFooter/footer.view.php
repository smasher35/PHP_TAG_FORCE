
		<div class="alt2">
			<div class="container">
				<footer>
					<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-1">&copy; PHP TAG FORCE - 2015</button>
					<br/> <a href="#home" class="go-top"><h3 class="glyphicon glyphicon-chevron-up"></h3></a>


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
					</div>
				</footer>
			</div>

		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="Bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			<?=require('javaScript/smoothPageTransition.js');?>
		</script>
		<script>
			//chama a função que permite o deslocar suave entre seccções
			<?=require('javaScript/smoothScrolling.js');?>
			<?=require('javaScript/goTopButton.js');?>
		</script>
	</body>
</html>