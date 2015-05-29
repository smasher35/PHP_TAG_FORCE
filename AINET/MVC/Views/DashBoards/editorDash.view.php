<?php require('MVC/Views/headerFooter/header.view.php');?>

<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->

</header>

<a class="padding" id="goTop"></a>
<div class="alt5">
<!-- JUMBOTRON -->
	<div class="row" id="jumboTronAccountsBrowser">
		<div class="container">
			<h1><b>Editor Dashboard</b></h1>
			<p class="lead"> Projects Managing, aprove reject delete projects and comments associated</p>
		</div>
	</div>

</div>

<div class="alt5">
	<div class="row">
		<div class="container padding-Top">
				<div class="row">
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a href="#projectManagement" data-toggle="tab">Project Management</a></li>
						<li><a href="#commentsManagement" data-toggle="tab">Comments Management</a></li>
					</ul>

					<div class="tab-content">
						<!-- PROJECTS MANAGEMENT -->

						<div class="tab-pane fade in active " id="projectManagement">
							<div class="container padding-Top">
								<div class="col-md-12 align-right">
									<ul class="nav nav-pills subNavButtons">
										<li role="presentation"><a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Project</a></li>
										<li role="presentation"><a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a></li>
										<li role="presentation"><a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Disable Selected</a></li>
									</ul>
								</div>

							</div>
							<div class="panel panel-primary panel-responsive" id="panelProjectsManagement">
								<!-- Default panel contents -->
								<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Pending Aproval </strong></h3></div>
								<!-- Table -->
									<table class="table table-stripped table-hover table-responsive">
										<tr>
											<th class="text-center"><input type="checkbox"> Select</th>
											<th class="text-center">Project Name</th>
											<th class="text-center">Type</th>
											<th class="text-center">Theme</th>
											<th class="text-center">Author</th>
											<th class="text-center">Operations</th>
										</tr>

										<!-- TODO: substituir pelo foeach a percorrer os projectos existentes -->
										<?php foreach ($users as $user) { ?>
											<tr>
												<td align="center"><input type="checkbox"></td>
												<td><?=$user->email?></td>
												<td><?=$user->institution_id?></td>
												<td align="center"><?=$user->position?></td>
												<td><?=$user->role?></td>
												<td align="center">
													<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
													<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button>
													<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
													<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button>
												</td>
											</tr>
										<?php } ?>
									</table>
									<div class="panel-footer">
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
									</div><!-- Fecha div class panel-footer -->
							</div><!-- Fecha Painel Projects Pending Aproval-->
							<hr>

							<!-- LIST OF PROJECTS REJECTED AND DELETED -->

							<div class="row">
								<div class="container">
									<ul class="nav nav-pills nav-justified">
										<li class="active"><a href="#projRejected" data-toggle="tab">Projects Rejected</a></li>
										<li><a href="#projDeleted" data-toggle="tab">Projects Deleted</a></li>
									</ul>

									<!-- PROJECTS REJECTED -->

									<div class="tab-content">
										<div class="tab-pane fade in active" id="projRejected">
											<div class="panel panel-primary panel-responsive" id="panelProjectsRejected">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Rejected </strong></h3></div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center">Project Name</th>
														<th class="text-center">Type</th>
														<th class="text-center">Theme</th>
														<th class="text-center">Author</th>
														<th class="text-center">Operations</th>
													</tr>

													<!-- TODO: substituir pelo foeach a percorrer os projectos existentes -->
													<?php foreach ($users as $user) { ?>
														<tr>
															<td align="center"><input type="checkbox"></td>
															<td><?=$user->email?></td>
															<td><?=$user->institution_id?></td>
															<td align="center"><?=$user->position?></td>
															<td><?=$user->role?></td>
															<td align="center">
																<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
																<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
																<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button>
															</td>
														</tr>
													<?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Rejected-->
										</div><!-- Fecha o Tab-pane Projects Rejected-->

										<!-- PROJECTS DELETED -->

										<div class="tab-pane fade" id="projDeleted">
											<div class="panel panel-primary panel-responsive" id="panelProjectsDeleted">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Deleted </strong></h3></div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center">Project Name</th>
														<th class="text-center">Type</th>
														<th class="text-center">Theme</th>
														<th class="text-center">Author</th>
														<th class="text-center">Operations</th>
													</tr>

													<!-- TODO: substituir pelo foeach a percorrer os projectos e mostrar somente os apagados -->
													<?php foreach ($users as $user) { ?>
														<tr>
															<td align="center"><input type="checkbox"></td>
															<td><?=$user->email?></td>
															<td><?=$user->institution_id?></td>
															<td align="center"><?=$user->position?></td>
															<td><?=$user->role?></td>
															<td align="center">
																<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
																<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button>
															</td>
														</tr>
													<?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul> <!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div> <!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Deleted-->
										</div><!-- Fecha o Tab-pane Projects Delected-->
									</div> <!-- Fecha o Tab-content projectos rejected e deleted-->
								</div> <!-- Fecha div class Container -->
							</div><!-- Fecha div class row -->
						</div> <!-- Fecha div tab-pane Projects Management -->

						<!-- COMMENTS MANAGEMENT -->

						<div class="tab-pane fade " id="commentsManagement">
							<div class="container padding-Top">
								<div class="col-md-12 align-right">
									<ul class="nav nav-pills subNavButtons">
										<li role="presentation"><a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a></li>
										<li role="presentation"><a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Disable Selected</a></li>
									</ul>
								</div>

							</div>
							<div class="panel panel-primary panel-responsive" id="panelCommentsExplorer">
								<!-- Default panel contents -->
								<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Pending Aproval </strong></h3></div>
								<!-- Table -->
								<table class="table table-stripped table-hover table-responsive">
									<tr>
										<th class="text-center"><input type="checkbox"> Select</th>
										<th class="text-center">Comment</th>
										<th class="text-center">Project</th>
										<th class="text-center">User</th>
										<th class="text-center">Operations</th>
									</tr>

									<!-- TODO: substituir pelo foeach a percorrer os comentários existentes -->
									<?php foreach ($users as $user) { ?>
										<tr>
											<td align="center"><input type="checkbox"></td>
											<td><?=$user->email?></td>
											<td><?=$user->institution_id?></td>
											<td align="center"><?=$user->position?></td>
											<td align="center">
												<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
												<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button>
												<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
											</td>
										</tr>
									<?php } ?>
								</table>
								<div class="panel-footer">
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
								</div><!-- Fecha div class panel-footer -->
							</div><!-- Fecha Painel Comments Pending Aproval-->
							<hr>

							<!-- LIST OF COMMENTS REJECTED AND DELETED -->

							<div class="row">
								<div class="container">
									<ul class="nav nav-pills nav-justified">
										<li class="active"><a href="#commentRejected" data-toggle="tab">Comments Rejected</a></li>
										<li><a href="#commentDeleted" data-toggle="tab">Comments Deleted</a></li>
									</ul>

									<!-- COMMENTS REJECTED -->

									<div class="tab-content">
										<div class="tab-pane fade in active" id="commentRejected">
											<div class="panel panel-primary panel-responsive" id="panelCommentsRejected">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Rejected </strong></h3></div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center">Comment</th>
														<th class="text-center">Project</th>
														<th class="text-center">User</th>
														<th class="text-center">Operations</th>
													</tr>

													<!-- TODO: substituir pelo foeach a percorrer os comentários existentes -->
													<?php foreach ($users as $user) { ?>
														<tr>
															<td align="center"><input type="checkbox"></td>
															<td><?=$user->email?></td>
															<td><?=$user->institution_id?></td>
															<td align="center"><?=$user->position?></td>
															<td align="center">
																<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
																<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
															</td>
														</tr>
													<?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Rejected-->
										</div><!-- Fecha o Tab-pane Projects Rejected-->

										<!-- COMMENTS DELETED -->

										<div class="tab-pane fade" id="commentDeleted">
											<div class="panel panel-primary panel-responsive" id="panelCommentsDeleted">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Deleted </strong></h3></div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center">Comment</th>
														<th class="text-center">Project</th>
														<th class="text-center">User</th>
														<th class="text-center">Operations</th>
													</tr>

													<!-- TODO: substituir pelo foeach a percorrer os comentários e mostrar somente os apagados -->
													<?php foreach ($users as $user) { ?>
														<tr>
															<td align="center"><input type="checkbox"></td>
															<td><?=$user->email?></td>
															<td><?=$user->institution_id?></td>
															<td align="center"><?=$user->position?></td>
															<td align="center">
																<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-book"></span></button>
															</td>
														</tr>
													<?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul> <!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div> <!-- fecha panel footer -->
											</div><!-- Fecha Painel Comments Deleted-->
										</div><!-- Fecha o Tab-pane Comments Delected-->
									</div> <!-- Fecha o Tab-content comments rejected e deleted-->
								</div> <!-- Fecha div class Container -->
							</div><!-- Fecha div class row -->
						</div> <!-- Fecha div tab-pane Comments Management -->

					</div><!-- FECHA div clas tab-content -->
				</div><!-- FECHA div class Row dentro do container -->
		</div><!-- FECHA div class container -->
	</div><!-- FECHA div class Row fora do container -->
</div><!-- FECHA  div class alt5 do corpo do project Management -->

<?php require('MVC/Views/headerFooter/footer.view.php');?>