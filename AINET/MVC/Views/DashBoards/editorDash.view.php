<?php require('MVC/Views/headerFooter/header.view.php');?>

<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-12 col-lg-offset-6">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#goTop"><strong id="subNavButtons"> </strong></a></li>
                </ul>
            </div>

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
						<li><a href="#tagsManagement" data-toggle="tab">Tags Management</a></li>
					</ul>

					<div class="tab-content">
<!----------------------------------------------------- PROJECTS MANAGEMENT ------------------------------------------------------------------------------------------------------>
						<div class="tab-pane fade in active " id="projectManagement">
							<br><!---------------------------------------------------------------- LIST OF PROJECTS APROVED, REJECTED AND DELETED ---------------------------------------------------------------->
							<div class="row">
								<div class="container">
									<ul class="nav nav-pills nav-justified">
									    <li class="active"><a href="#projPending" data-toggle="tab">Projects Pending</a></li>
									    <li><a href="#projAproved" data-toggle="tab">Projects Aproved</a></li>
										<li><a href="#projRejected" data-toggle="tab">Projects Rejected</a></li>
										<li><a href="#projDeleted" data-toggle="tab">Projects Deleted</a></li>
									</ul>

									<div class="tab-content">
<!---------------------------------------------------------- PROJECTS PENDING APROVAL ----------------------------------------------------------------------------------------------->
										 <div class="tab-pane fade in active" id="projPending">
											<div class="panel panel-primary panel-responsive" id="panelProjectsPending">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Pending Aproval </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                        <a href="addProjectPage.php"  class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                        <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> Aprove Selected</a>
                                                        <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                        <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project Name</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Type</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Theme</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Author</th>
														<th class="text-center">Operations</th>
													</tr>


													<?php foreach ($projectsPending as $project) { ?>
                                                        <tr>
                                                            <td align="center"><input type="checkbox"></td>
                                                            <td><?=$project->name?></td>
                                                            <td><?=$project->type?></td>
                                                            <td><?=$project->theme?></td>
                                                            <td><?=$accountController->getUserName($project->created_by)?></td>
                                                            <td align="center">
                                                                <a href="aproveProject.php?project_id=<?=$project->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                                <a href="rejectProjectForm.php?project_id=<?=$project->id?>"><button class="btn btn-warning btn-xs" data-toggle="tooltip"  data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button></a>
                                                                <a href="deleteProject.php?project_id=<?=$project->id?>"><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></a>
                                                                <a href="projectDetails.php?project_id=<?=$project->id?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                            </td>
                                                        </tr>

                                                    <?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Aproved-->
										</div><!-- Fecha o Tab-pane Projects Aproved-->




<!---------------------------------------------------------- PROJECTS APROVED ----------------------------------------------------------------------------------------------->
										 <div class="tab-pane fade in" id="projAproved">
											<div class="panel panel-primary panel-responsive" id="panelProjectsAproved">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Aproved </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                        <a href="addProjectPage.php"  class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                        <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                        <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project Name</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Type</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Theme</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Author</th>
														<th class="text-center">Operations</th>
													</tr>


													<?php foreach ($projectsAproved as $project) { ?>
                                                        <tr>
                                                            <td align="center"><input type="checkbox"></td>
                                                            <td><?=$project->name?></td>
                                                            <td><?=$project->type?></td>
                                                            <td><?=$project->theme?></td>
                                                            <td><?=$accountController->getUserName($project->created_by)?></td>
                                                            <td align="center">
                                                                <a href="rejectProjectForm.php?project_id=<?=$project->id?>"><button class="btn btn-warning btn-xs" data-toggle="tooltip"  data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button></a>
                                                                <a href="deleteProject.php?project_id=<?=$project->id?>"><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></a>
                                                                <a href="projectDetails.php?project_id=<?=$project->id?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                            </td>
                                                        </tr>

                                                    <?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Aproved-->
										</div><!-- Fecha o Tab-pane Projects Aproved-->

<!---------------------------------------------------------- PROJECTS REJECTED --------------------------------------------------------------------->
										<div class="tab-pane fade in" id="projRejected">
											<div class="panel panel-primary panel-responsive" id="panelProjectsRejected">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Rejected </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                        <a href="addProjectPage.php"  class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                        <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> Aprove Selected</a>
                                                        <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project Name</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Type</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Theme</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Author</th>
														<th class="text-center">Operations</th>
													</tr>


													<?php foreach ($projectsRejected as $project) { ?>
                                                        <tr>
                                                            <td align="center"><input type="checkbox"></td>
                                                            <td><?=$project->name?></td>
                                                            <td><?=$project->type?></td>
                                                            <td><?=$project->theme?></td>
                                                            <td><?=$accountController->getUserName($project->created_by)?></td>
                                                            <td align="center">
                                                                <a href="aproveProject.php?project_id=<?=$project->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                                <a href="deleteProject.php?project_id=<?=$project->id?>"><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-remove"></span></button></a>
                                                                <a href="projectDetails.php?project_id=<?=$project->id?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Rejected-->
										</div><!-- Fecha o Tab-pane Projects Rejected-->

<!------------------------------------------------------------------ PROJECTS DELETED ------------------------------------------------------------------------------------------------->

										<div class="tab-pane fade" id="projDeleted">
											<div class="panel panel-primary panel-responsive" id="panelProjectsDeleted">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects Deleted </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                        <a href="addProjectPage.php"  class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                        <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span> Aprove Selected</a>
                                                    <hr>
                                                </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project Name</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Type</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Theme</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Author</th>
														<th class="text-center">Operations</th>
													</tr>


													<?php foreach ($projectsDeleted as $project) { ?>
                                                        <tr>
                                                            <td align="center"><input type="checkbox"></td>
                                                            <td><?=$project->name?></td>
                                                            <td><?=$project->type?></td>
                                                            <td><?=$project->theme?></td>
                                                            <td><?=$accountController->getUserName($project->created_by)?></td>
                                                            <td align="center">
                                                                <a href="projectDetails.php?project_id=<?=$project->id?>"><button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="View Project"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
												</table>
												<div class="panel-footer">
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
															</ul> <!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div> <!-- fecha panel footer -->
											</div><!-- Fecha Painel Projects Deleted-->
										</div><!-- Fecha o Tab-pane Projects Delected-->
									</div> <!-- Fecha o Tab-content projectos Aproved rejected e deleted-->
								</div> <!-- Fecha div class Container -->
							</div><!-- Fecha div class row -->
						</div> <!-- Fecha div tab-pane Projects Management -->

<!--------------------------------------------------------- COMMENTS MANAGEMENT -------------------------------------------------------------------------------------->

						<div class="tab-pane fade " id="commentsManagement">
<!---------------------------------------------- LIST OF COMMENTS APROVED REJECTED AND DELETED ------------------------------------------------------------------>
							<div class="row padding-Top">
								<div class="container">
									<ul class="nav nav-pills  nav-justified">
									    <!-- Declaração das Réguas -->
									    <li class="active"><a href="#commentPending" data-toggle="tab">Comments Pending</a></li>
									    <li><a href="#commentAproved" data-toggle="tab">Comments Aproved</a></li>
										<li><a href="#commentRejected" data-toggle="tab">Comments Rejected</a></li>
										<li><a href="#commentDeleted" data-toggle="tab">Comments Deleted</a></li>
									</ul>

									<div class="tab-content">
<!-------------------------------------------------------------- COMMENTS PENDING ---------------------------------------------------------------------------------->
										<div class="tab-pane fade in active" id="commentPending">
											<div class="panel panel-primary panel-responsive" id="panelCommentsPending">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Pending Aproval</strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                    <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                 </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Comment</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                                        <th class="text-center">Operations</th>
													</tr>

													<?php foreach ($commentsPending as $comment) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$comment->comment?></td>
                                                            <td><?=$projectControler->getProjectName($comment->project_id)?></td>
                                                            <td><?=$comment->user_name?></td>
                                                            <td align="center">
                                                                <a href="aproveComment.php?comment_id=<?=$comment->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                                <a href="rejectCommentForm.php?comment_id=<?=$comment->id?>"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button></a>
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
																<li><a href="#">&laquo;</a>	</li>
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Comments Aproved-->
										</div><!-- Fecha o Tab-pane Comments Aproved-->


									<!-------------------------------------------------------------- COMMENTS APROVED ---------------------------------------------------------------------------------->
										<div class="tab-pane fade in" id="commentAproved">
											<div class="panel panel-primary panel-responsive" id="panelCommentsAproved">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Aproved </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                     <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                     <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a>
                                                    <hr>
                                                 </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Comment</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                                        <th class="text-center">Operations</th>
													</tr>

													
													<?php foreach ($commentsApproved as $comment) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$comment->comment?></td>
                                                            <td><?=$projectControler->getProjectName($comment->project_id)?></td>
                                                            <td><?=$comment->user_name?></td>
                                                            <td align="center">
                                                                <a href="rejectCommentForm.php?comment_id=<?=$comment->id?>"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="bottom" title="Reject"><span class="glyphicon glyphicon-ban-circle"></span></button></a>
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
																<li><a href="#">&laquo;</a>	</li>
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
															</ul><!-- Fecha div class pagination -->
														</div><!-- Fecha div class col-md-12 -->
													</div><!-- Fecha div class row text-center -->
													<!-- /.row -->
												</div><!-- fecha panel footer -->
											</div><!-- Fecha Painel Comments Aproved-->
										</div><!-- Fecha o Tab-pane Comments Aproved-->


<!-------------------------------------------------------------- COMMENTS REJECTED ---------------------------------------------------------------------------------->
										<div class="tab-pane fade in" id="commentRejected">
											<div class="panel panel-primary panel-responsive" id="panelCommentsRejected">
												<!-- Default panel contents -->
												<div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments Rejected </strong></h3></div>
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                 </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Comment</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                                        <th class="text-center">Operations</th>
													</tr>

													<?php foreach ($commentsRejected as $comment) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$comment->comment?></td>
                                                            <td><?=$projectControler->getProjectName($comment->project_id)?></td>
                                                            <td><?=$comment->user_name?></td>
                                                            <td align="center">
                                                                <a href="aproveComment.php?comment_id=<?=$comment->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
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
																<li><a href="#">&laquo;</a>	</li>
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
												<div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <hr>
                                                 </div>
												<!-- Table -->
												<table class="table table-stripped table-hover table-responsive">
													<tr>
														<th class="text-center"><input type="checkbox"> Select</th>
														<th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Comment</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
														<th class="text-center">Operations</th>
													</tr>

													<?php foreach ($commentsDeleted as $comment) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$comment->comment?></td>
                                                            <td><?=$projectControler->getProjectName($comment->project_id)?></td>
                                                            <td><?=$comment->user_name?></td>
                                                            <td align="center">
                                                                <a href="aproveComment.php?comment_id=<?=$comment->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
												</table>
												<div class="panel-footer">
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



<!--------------------------------------------------------- TAGS MANAGEMENT -------------------------------------------------------------------------------------->
                        <div class="tab-pane fade " id="tagsManagement">
                            <!---------------------------------------------- LIST OF TAGS APROVED REJECTED AND DELETED ------------------------------------------------------------------>
                            <div class="row padding-Top">
                                <div class="container">
                                    <ul class="nav nav-pills  nav-justified">
                                        <!-- Declaração das Réguas -->
                                        <li class="active"><a href="#tagsPending" data-toggle="tab">Tags Pending</a></li>
                                        <li><a href="#tagsAproved" data-toggle="tab">Tags Aproved</a></li>
                                        <li><a href="#tagsRejected" data-toggle="tab">Tags Rejected</a></li>
                                        <li><a href="#tagsDeleted" data-toggle="tab">Tags Deleted</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-------------------------------------------------------------- TAGS PENDING ---------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in active" id="tagsPending">
                                            <div class="panel panel-primary panel-responsive" id="panelTagssPending">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags Pending Aproval</strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                    <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center"><input type="checkbox"> Select</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Tag</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>


                                                    <?php foreach ($tagsPending as $tag) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$tagsController->getTagName($tag->tag_id)?></td>
                                                            <td><?=$projectControler->getProjectName($tag->project_id)?></td>
                                                            <td><?=$accountController->getUserName($tag->added_by)?></td>
                                                            <td align="center">
                                                                <a href="aproveTag.php?tag_id=<?=$tag->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
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
                                                                <li><a href="#">&laquo;</a>	</li>
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
                                                            </ul><!-- Fecha div class pagination -->
                                                        </div><!-- Fecha div class col-md-12 -->
                                                    </div><!-- Fecha div class row text-center -->
                                                    <!-- /.row -->
                                                </div><!-- fecha panel footer -->
                                            </div><!-- Fecha Painel Comments pending-->
                                        </div><!-- Fecha o Tab-pane Comments pending-->


                                        <!-------------------------------------------------------------- TAGS APROVED ---------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in" id="tagsAproved">
                                            <div class="panel panel-primary panel-responsive" id="panelTagsAproved">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags Aproved </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-ban-circle"></span> Reject Selected</a>
                                                    <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Remove Selected</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center"><input type="checkbox"> Select</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Tag</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($tagsApproved as $tag) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$tagsController->getTagName($tag->tag_id)?></td>
                                                            <td><?=$projectControler->getProjectName($tag->project_id)?></td>
                                                            <td><?=$accountController->getUserName($tag->added_by)?></td>
                                                            <td align="center">
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
                                                                <li><a href="#">&laquo;</a>	</li>
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
                                                            </ul><!-- Fecha div class pagination -->
                                                        </div><!-- Fecha div class col-md-12 -->
                                                    </div><!-- Fecha div class row text-center -->
                                                    <!-- /.row -->
                                                </div><!-- fecha panel footer -->
                                            </div><!-- Fecha Painel Comments Aproved-->
                                        </div><!-- Fecha o Tab-pane Comments Aproved-->


                                        <!-------------------------------------------------------------- TAGS REJECTED ---------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in" id="tagsRejected">
                                            <div class="panel panel-primary panel-responsive" id="panelTagsRejected">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags Rejected </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <a href="#"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> Delete Selected</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center"><input type="checkbox"> Select</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Tag</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($tagsRejected as $tag) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$tagsController->getTagName($tag->tag_id)?></td>
                                                            <td><?=$projectControler->getProjectName($tag->project_id)?></td>
                                                            <td><?=$accountController->getUserName($tag->added_by)?></td>
                                                            <td align="center">
                                                                <a href="aproveTag.php?tag_id=<?=$tag->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
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
                                                                <li><a href="#">&laquo;</a>	</li>
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
                                                            </ul><!-- Fecha div class pagination -->
                                                        </div><!-- Fecha div class col-md-12 -->
                                                    </div><!-- Fecha div class row text-center -->
                                                    <!-- /.row -->
                                                </div><!-- fecha panel footer -->
                                            </div><!-- Fecha Painel Projects Rejected-->
                                        </div><!-- Fecha o Tab-pane Projects Rejected-->

                                        <!---------------------- TAGS DELETED ------------------------------------------------------------------------------------------->

                                        <div class="tab-pane fade" id="tagsDeleted">
                                            <div class="panel panel-primary panel-responsive" id="panelTagsDeleted">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags Deleted </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="#"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Aprove Selected</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center"><input type="checkbox"> Select</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Tag</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Project</th>
                                                        <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($tagsDeleted as $tag) { ?>
                                                        <tr>
                                                            <th class="text-center"><input type="checkbox"></th>
                                                            <td><?=$tagsController->getTagName($tag->tag_id)?></td>
                                                            <td><?=$projectControler->getProjectName($tag->project_id)?></td>
                                                            <td><?=$accountController->getUserName($tag->added_by)?></td>
                                                            <td align="center">
                                                                <a href="aproveTag.php?tag_id=<?=$tag->id?>"><button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="bottom" title="Aprove"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                                <div class="panel-footer">
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
                                                            </ul> <!-- Fecha div class pagination -->
                                                        </div><!-- Fecha div class col-md-12 -->
                                                    </div><!-- Fecha div class row text-center -->
                                                    <!-- /.row -->
                                                </div> <!-- fecha panel footer -->
                                            </div><!-- Fecha Painel tags Deleted-->
                                        </div><!-- Fecha o Tab-pane tags Delected-->
                                    </div> <!-- Fecha o Tab-content tags rejected e deleted-->
                                </div> <!-- Fecha div class Container -->
                            </div><!-- Fecha div class row -->
                        </div> <!-- Fecha div tab-pane Tags Management -->
<!------------------------------------------------------------ END TAGS MANAGEMENT --------------------------------------------------------------------------->

					</div><!-- FECHA div clas tab-content -->
				</div><!-- FECHA div class Row dentro do container -->
		</div><!-- FECHA div class container -->
	</div><!-- FECHA div class Row fora do container -->
</div><!-- FECHA  div class alt5 do corpo do projects and Comment Management -->

<?php require('MVC/Views/headerFooter/footer.view.php');?>