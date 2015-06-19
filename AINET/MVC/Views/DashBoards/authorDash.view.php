<!-- /**
	 * Created by PhpStorm.
	 * User: Paulo
	 * Date: 27/04/2015
	 * Time: 15:03
	 */
-->

<?php require('MVC/Views/headerFooter/header.view.php'); ?>
<div class="alt5">
    <div class="row" id="jumboTronAccountsBrowser">
        <div class="container">
            <h1><b>Author Dashboard</b></h1>

            <p class="lead"> Manage contents Associated with the Author, Projects, Comments, Tags, Media Asssociated and
                so on</p>
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
                                    <li class="active"><a href="#projPending" data-toggle="tab">My Projects Pending</a>
                                    </li>
                                    <li><a href="#projAproved" data-toggle="tab">My Projects Aproved</a></li>
                                    <li><a href="#projRejected" data-toggle="tab">My Projects Rejected</a></li>
                                </ul>

                                <div class="tab-content">
                                    <!---------------------------------------------------------- PROJECTS PENDING APROVAL ----------------------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in active" id="projPending">
                                        <div class="panel panel-primary panel-responsive" id="panelProjectsPending">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects
                                                        Pending Aproval </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <a href="addProjectPage.php" class="btn btn-success btn-lg"><span
                                                        class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                <hr>
                                            </div>
                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project Name
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Type
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Theme
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($projectsByOwnerPending as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->type ?></td>
                                                        <td><?= $project->theme ?></td>
                                                        <td align="center">
                                                            <a href="editProjectPage.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-primary btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Edit Project"><span
                                                                        class="glyphicon glyphicon-edit"></span>
                                                                </button>
                                                            </a>
                                                            <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Delete"><span
                                                                    class="glyphicon glyphicon-remove"></span></button>
                                                            <a href="projectDetails.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-info btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="View Project"><span
                                                                        class="glyphicon glyphicon-book"></span>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Projects Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Aproved-->


                                    <!---------------------------------------------------------- PROJECTS APROVED ----------------------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="projAproved">
                                        <div class="panel panel-primary panel-responsive" id="panelProjectsAproved">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects
                                                        Aproved </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <a href="addProjectPage.php" class="btn btn-success btn-lg"><span
                                                        class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                <hr>
                                            </div>
                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project Name
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Type
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Theme
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($projectsByOwnerAproved as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->type ?></td>
                                                        <td><?= $project->theme ?></td>
                                                        <td align="center">
                                                            <a href="editProjectPage.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-primary btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Edit Project"><span
                                                                        class="glyphicon glyphicon-edit"></span>
                                                                </button>
                                                            </a>
                                                            <a href="projectDetails.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-info btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="View Project"><span
                                                                        class="glyphicon glyphicon-book"></span>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Projects Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Aproved-->

                                    <!---------------------------------------------------------- PROJECTS REJECTED --------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="projRejected">
                                        <div class="panel panel-primary panel-responsive" id="panelProjectsRejected">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects
                                                        Rejected </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <a href="addProjectPage.php" class="btn btn-success btn-lg"><span
                                                        class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                <hr>
                                            </div>
                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project Name
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Refusal Message
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($projectsByOwnerRejected as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->refusal_msg ?></td>
                                                        <td align="center">
                                                            <a href="editProjectPage.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-primary btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Edit Project"><span
                                                                        class="glyphicon glyphicon-edit"></span>
                                                                </button>
                                                            </a>
                                                            <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Delete"><span
                                                                    class="glyphicon glyphicon-remove"></span></button>
                                                            <a href="projectDetails.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-info btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="View Project"><span
                                                                        class="glyphicon glyphicon-book"></span>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Projects Rejected-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Rejected-->
                                </div>
                                <!-- Fecha o Tab-content projectos Aproved rejected e deleted-->
                            </div>
                            <!-- Fecha div class Container -->
                        </div>
                        <!-- Fecha div class row -->
                    </div>
                    <!-- Fecha div tab-pane Projects Management -->

                    <!--------------------------------------------------------- COMMENTS MANAGEMENT -------------------------------------------------------------------------------------->

                    <div class="tab-pane fade " id="commentsManagement">
                        <!---------------------------------------------- LIST OF COMMENTS APROVED REJECTED AND DELETED ------------------------------------------------------------------>
                        <div class="row padding-Top">
                            <div class="container">
                                <ul class="nav nav-pills  nav-justified">
                                    <!-- Declaração das Réguas -->
                                    <li class="active"><a href="#commentPending" data-toggle="tab">My Comments
                                            Pending</a></li>
                                    <li><a href="#commentAproved" data-toggle="tab">My Comments Aproved</a></li>
                                    <li><a href="#commentRejected" data-toggle="tab">My Comments Rejected</a></li>
                                </ul>

                                <div class="tab-content">
                                    <!-------------------------------------------------------------- COMMENTS PENDING ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in active" id="commentPending">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsPending">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Pending Aproval</strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Comment
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($commentsByOwnerPending as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                            <a href="deleteComment.php?comment_id=<?= $comment->id ?>">
                                                                <a href="deleteComment.php?comment_id=<?= $comment->id ?>">
                                                                    <button class="btn btn-danger btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Delete"><span
                                                                            class="glyphicon glyphicon-remove"></span>
                                                                    </button>
                                                                </a>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Comments Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Aproved-->


                                    <!-------------------------------------------------------------- COMMENTS APROVED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="commentAproved">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsAproved">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Aproved </strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Comment
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($commentsByOwnerAproved as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Comments Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Aproved-->


                                    <!-------------------------------------------------------------- COMMENTS REJECTED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="commentRejected">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsRejected">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Rejected </strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Comment
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Refusal Message
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($commentsByOwnerRejected as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td><?= $comment->refusal_msg ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                            <a href="deleteComment.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-danger btn-xs"
                                                                        data-toggle="tooltip"
                                                                        data-placement="bottom" title="Delete"><span
                                                                        class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Projects Rejected-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Rejected-->


                                </div>
                                <!-- Fecha o Tab-content comments rejected e deleted-->
                            </div>
                            <!-- Fecha div class Container -->
                        </div>
                        <!-- Fecha div class row -->
                    </div>
                    <!-- Fecha div tab-pane Comments Management -->


                    <!--------------------------------------------------------- TAGS MANAGEMENT -------------------------------------------------------------------------------------->
                    <div class="tab-pane fade " id="tagsManagement">
                        <!---------------------------------------------- LIST OF TAGS APROVED REJECTED AND DELETED ------------------------------------------------------------------>
                        <div class="row padding-Top">
                            <div class="container">
                                <ul class="nav nav-pills  nav-justified">
                                    <!-- Declaração das Réguas -->
                                    <li class="active"><a href="#tagsPending" data-toggle="tab">My Tags Pending</a></li>
                                    <li><a href="#tagsAproved" data-toggle="tab">My Tags Aproved</a></li>
                                    <li><a href="#tagsRejected" data-toggle="tab">My Tags Rejected</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-------------------------------------------------------------- TAGS PENDING ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in active" id="tagsPending">
                                        <div class="panel panel-primary panel-responsive" id="panelTagssPending">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Pending Aproval</strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Tag
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsByOwnerPending as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                            <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Delete"><span
                                                                    class="glyphicon glyphicon-remove"></span></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Comments pending-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments pending-->


                                    <!-------------------------------------------------------------- TAGS APROVED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="tagsAproved">
                                        <div class="panel panel-primary panel-responsive" id="panelTagsAproved">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Aproved </strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Tag
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsByOwnerAproved as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Comments Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Aproved-->


                                    <!-------------------------------------------------------------- TAGS REJECTED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="tagsRejected">
                                        <div class="panel panel-primary panel-responsive" id="panelTagsRejected">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Rejected </strong></h3></div>

                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <tr>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Tag
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Project
                                                    </th>
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Refusal Message
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsByOwnerRejected as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>

                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
                                                            <button class="btn btn-danger btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Delete"><span
                                                                    class="glyphicon glyphicon-remove"></span></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Projects Rejected-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Rejected-->
                                </div>
                                <!-- Fecha o Tab-content tags rejected e deleted-->
                            </div>
                            <!-- Fecha div class Container -->
                        </div>
                        <!-- Fecha div class row -->
                    </div>
                    <!-- Fecha div tab-pane Tags Management -->
                    <!------------------------------------------------------------ END TAGS MANAGEMENT --------------------------------------------------------------------------->

                </div>
                <!-- FECHA div clas tab-content -->
            </div>
            <!-- FECHA div class Row dentro do container -->
        </div>
        <!-- FECHA div class container -->
    </div>
    <!-- FECHA div class Row fora do container -->
</div><!-- FECHA  div class alt5 do corpo do projects and Comment Management -->
<?php require('MVC/Views/headerFooter/footer.view.php'); ?>