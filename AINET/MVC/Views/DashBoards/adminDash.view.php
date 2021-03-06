<!--/**
	* Created by PhpStorm.
	* User: Paulo Penicheiro - 2130628
	* Date: 27/04/2015
	* Time: 15:02
	*/
-->
<?php require('MVC/Views/headerFooter/header.view.php'); ?>

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
<!-- JUMBOTRON -->

<div class="row" id="jumboTronAccountsBrowser">
    <div class="container">
        <h1><b>Administrator Dashboard</b></h1>

        <p class="lead">Site Managing, Create and manage User Accounts - Projects Managing, aprove reject delete
            projects and comments associated</p>
    </div>
</div>


<div class="alt5">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading text-center"><strong>My Personal Area</strong></div>
                    <div class="panel-body text-center align-center">
                        <a href="myContentsProjects.php?owner_id=<?= $accountController->getUserId($_SESSION['email']) ?>">
                            <button class="btn btn-primary btnFormat">My Projects</button>
                        </a>
                        <a href="myContentsComments.php?owner_id=<?= $accountController->getUserId($_SESSION['email']) ?>">
                            <button class="btn btn-success btnFormat">My Comments</button>
                        </a>
                        <a href="myContentsTags.php?owner_id=<?= $accountController->getUserId($_SESSION['email']) ?>">
                            <button class="btn btn-warning btnFormat">My Tags</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container padding-Top">
            <div class="row">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#accountsManagement" data-toggle="tab">Accounts Management</a></li>
                    <li><a href="#projectManagement" data-toggle="tab">Project Management</a></li>
                    <li><a href="#commentsManagement" data-toggle="tab">Comments Management</a></li>
                    <li><a href="#tagsManagement" data-toggle="tab">Tags Management</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="accountsManagement">
                        <!-- ACCOUNTS MANAGEMENT -->


                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <br>
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="activeAccounts active"><a href="#activeAccounts" data-toggle="tab">Active
                                                Accounts</a></li>
                                        <li><a href="#inactiveAccounts" data-toggle="tab">Disabled Accounts</a></li>
                                        <li><a href="#deletedAccounts" data-toggle="tab">Deleted Accounts</a></li>
                                    </ul>
                                    <div class="tab-content">

                                        <!---------------------------------------------------------- ACTIVE ACCOUNTS ----------------------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in active" id="activeAccounts">
                                            <div class="panel panel-primary panel-responsive" id="panelActiveAccounts">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Active
                                                            Accounts </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="addAccountPage.php" class="btn btn-info btn-sm"><span
                                                            class="glyphicon glyphicon-new-window"></span> New
                                                        Account</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            User Name
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Institution
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Position
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Role
                                                        </th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($usersActive as $user) { ?>
                                                        <tr>
                                                            <td><?= $user->email ?></td>
                                                            <td><?= $institutionController->getInstitutionName($user->institution_id) ?></td>
                                                            <td align="center"><?= $user->position ?></td>
                                                            <td align="center"><?= $accountController->getRoleName($user->role) ?></td>
                                                            <td align="center">
                                                                <a href="editAccountPage.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-primary btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Edit"><span
                                                                            class="glyphicon glyphicon-edit"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="disableAccount.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-warning btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Disable">
                                                                        <span
                                                                            class="glyphicon glyphicon-ban-circle"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="deleteAccount.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-danger btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Delete"><span
                                                                            class="glyphicon glyphicon-remove"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="accountDetails.php?owner_id=<?= $user->id ?>">
                                                                    <button class="btn btn-info btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Details">
                                                                        <span class="glyphicon glyphicon-book"></span>
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
                                            <!-- Fecha Painel Active Accounts-->
                                        </div>
                                        <!-- Fecha o Tab-pane Active Accounts-->


                                        <!---------------------------------------------------------- DISABLED ACCOUNTS ----------------------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in" id="inactiveAccounts">
                                            <div class="panel panel-primary panel-responsive" id="inactiveAccounts">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Disabled
                                                            Accounts </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="addAccountPage.php" class="btn btn-info btn-sm"><span
                                                            class="glyphicon glyphicon-new-window"></span> New
                                                        Account</a>
                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            User Name
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Institution
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Position
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Role
                                                        </th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($usersDisabled as $user) { ?>
                                                        <tr>
                                                            <td><?= $user->email ?></td>
                                                            <td><?= $institutionController->getInstitutionName($user->institution_id) ?></td>
                                                            <td align="center"><?= $user->position ?></td>
                                                            <td align="center"><?= $accountController->getRoleName($user->role) ?></td>
                                                            <td align="center">
                                                                <a href="editAccountPage.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-primary btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Edit"><span
                                                                            class="glyphicon glyphicon-edit"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="enableAccount.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-success btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Activate">
                                                                        <span class="glyphicon glyphicon-ok"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="deleteAccount.phpAccount.php?account_id=<?= $user->id ?>">
                                                                    <button class="btn btn-danger btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Delete"><span
                                                                            class="glyphicon glyphicon-remove"></span>
                                                                    </button>
                                                                </a>
                                                                <a href="accountDetails.php?owner_id=<?= $user->id ?>">
                                                                    <button class="btn btn-info btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Details">
                                                                        <span class="glyphicon glyphicon-book"></span>
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
                                            <!-- Fecha Painel Disabled Accounts-->
                                        </div>
                                        <!-- Fecha o Tab-pane Disabled Accounts-->


                                        <!---------------------------------------------------------- DELETED ACCOUNTS ----------------------------------------------------------------------------------------------->
                                        <div class="tab-pane fade in" id="deletedAccounts">
                                            <div class="panel panel-primary panel-responsive" id="deletedAccounts">
                                                <!-- Default panel contents -->
                                                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Deleted
                                                            Accounts </strong></h3></div>
                                                <div class="col-md-12 align-center inline">
                                                    <br>
                                                    <a href="addAccountPage.php" class="btn btn-info btn-sm"><span
                                                            class="glyphicon glyphicon-new-window"></span> New
                                                        Account</a>

                                                    <hr>
                                                </div>
                                                <!-- Table -->
                                                <table class="table table-stripped table-hover table-responsive">
                                                    <tr>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            User Name
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Institution
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Position
                                                        </th>
                                                        <th class="text-center">
                                                            <button type="button"
                                                                    class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                            Role
                                                        </th>
                                                        <th class="text-center">Operations</th>
                                                    </tr>

                                                    <?php foreach ($usersDeleted as $user) { ?>
                                                        <tr>
                                                            <td><?= $user->email ?></td>
                                                            <td><?= $institutionController->getInstitutionName($user->institution_id) ?></td>
                                                            <td align="center"><?= $user->position ?></td>
                                                            <td align="center"><?= $accountController->getRoleName($user->role) ?></td>
                                                            <td align="center">
                                                                <a href="accountDetails.php?owner_id=<?= $user->id ?>">
                                                                    <button class="btn btn-info btn-xs"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom" title="Details">
                                                                        <span class="glyphicon glyphicon-book"></span>
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
                                            <!-- Fecha Painel Deleted Accounts-->
                                        </div>
                                        <!-- Fecha o Tab-pane Deleted Accounts-->

                                    </div>
                                    <!-- Fecha Tab-Content -->
                                </div>
                                <!-- Fecha Row -->
                            </div>
                            <!-- Fecha Container -->
                        </div>
                        <!-- Fecha Row -->
                    </div>
                    <!-- Fecha div tab-pane accounts Management -->
                    <!---------------------------------------------------------------- END ACCOUNTS MANAGEMENT -------------------------------------------------------------------------------------->


                    <!----------------------------------------------------- PROJECTS MANAGEMENT ------------------------------------------------------------------------------------------------------>
                    <div class="tab-pane fade in " id="projectManagement">
                        <br><!---------------------------------------------------------------- LIST OF PROJECTS APROVED, REJECTED AND DELETED ---------------------------------------------------------------->
                        <div class="row">
                            <div class="container">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active"><a href="#projPending" data-toggle="tab">Projects Pending</a>
                                    </li>
                                    <li><a href="#projAproved" data-toggle="tab">Projects Aproved</a></li>
                                    <li><a href="#projRejected" data-toggle="tab">Projects Rejected</a></li>
                                    <li><a href="#projDeleted" data-toggle="tab">Projects Deleted</a></li>
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
                                                <a href="addProjectPage.php" class="btn btn-info btn-sm"><span
                                                        class="glyphicon glyphicon-new-window"></span> New Project</a>
                                                <hr>
                                            </div>
                                            <!-- Table -->
                                            <table class="table table-stripped table-hover table-responsive">
                                                <thead>
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
                                                <th class="text-center">
                                                    <button type="button"
                                                            class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                    Author
                                                </th>
                                                <th class="text-center">Operations</th>
                                                </thead>

                                                <?php foreach ($projectsPending as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->type ?></td>
                                                        <td><?= $project->theme ?></td>
                                                        <td><?= $accountController->getUserName($project->created_by) ?></td>

                                                        <td align="center">
                                                            <a href="editProjectPage.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-primary btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Edit Project"><span
                                                                        class="glyphicon glyphicon-edit"></span>
                                                                </button>
                                                            </a>
                                                            <a href="aproveProject.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                            <a href="rejectProjectForm.php?project_id=<?= $project->id ?>">
                                                                <button onclick="<?php $project->id ?>"
                                                                        class="btn btn-warning btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Reject"><span
                                                                        class="glyphicon glyphicon-ban-circle"></span>
                                                                </button>
                                                            </a>
                                                            <a href="deleteProject.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-danger btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Delete"><span
                                                                        class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </a>
                                                            <button class="btn btn-primary btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Edit"><span
                                                                    class="glyphicon glyphicon-edit"></span></button>
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
                                        <!-- Fecha Painel Projects Pending-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Pending-->


                                    <!---------------------------------------------------------- PROJECTS APROVED ----------------------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="projAproved">
                                        <div class="panel panel-primary panel-responsive" id="panelProjectsAproved">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects
                                                        Aproved </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <a href="addProjectPage.php" class="btn btn-info btn-sm"><span
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
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Author
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($projectsAproved as $project2) { ?>
                                                    <tr>
                                                        <td><?= $project2->name ?></td>
                                                        <td><?= $project2->type ?></td>
                                                        <td><?= $project2->theme ?></td>
                                                        <td><?= $accountController->getUserName($project2->created_by) ?></td>
                                                        <td align="center">

                                                            <a href="rejectProjectForm.php?project_id=<?= $project2->id ?>">
                                                                <button class="btn btn-warning btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Reject"><span
                                                                        class="glyphicon glyphicon-ban-circle"></span>
                                                                </button>
                                                            </a>
                                                            <a href="deleteProject.php?project_id=<?= $project2->id ?>">
                                                                <button class="btn btn-danger btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Delete"><span
                                                                        class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </a>
                                                            <a href="editProjectPage.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-primary btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Edit Project"><span
                                                                        class="glyphicon glyphicon-edit"></span>
                                                                </button>
                                                            </a>
                                                            class="glyphicon glyphicon-edit"></span></button>
                                                            <a href="projectDetails.php?project_id=<?= $project2->id ?>">
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
                                                <a href="addProjectPage.php" class="btn btn-info btn-sm"><span
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
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Author
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($projectsRejected as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->type ?></td>
                                                        <td><?= $project->theme ?></td>
                                                        <td><?= $accountController->getUserName($project->created_by) ?></td>
                                                        <td align="center">

                                                            <a href="aproveProject.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                            <a href="deleteProject.php?project_id=<?= $project->id ?>">
                                                                <button class="btn btn-danger btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Delete"><span
                                                                        class="glyphicon glyphicon-remove"></span>
                                                                </button>
                                                            </a>
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
                                        <!-- Fecha Painel Projects Rejected-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Rejected-->

                                    <!------------------------------------------------------------------ PROJECTS DELETED ------------------------------------------------------------------------------------------------->
                                    <div class="tab-pane fade" id="projDeleted">
                                        <div class="panel panel-primary panel-responsive" id="panelProjectsDeleted">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Projects
                                                        Deleted </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <a href="addProjectPage.php" class="btn btn-info btn-sm"><span
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
                                                    <th class="text-center">
                                                        <button type="button"
                                                                class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                                                        Author
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($projectsDeleted as $project) { ?>
                                                    <tr>
                                                        <td><?= $project->name ?></td>
                                                        <td><?= $project->type ?></td>
                                                        <td><?= $project->theme ?></td>
                                                        <td><?= $accountController->getUserName($project->created_by) ?></td>
                                                        <td align="center">
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
                                        <!-- Fecha Painel Projects Deleted-->
                                    </div>
                                    <!-- Fecha o Tab-pane Projects Delected-->
                                </div>
                                <!-- Fecha o Tab-content projectos Aproved rejected e deleted-->
                            </div>
                            <!-- Fecha div class Container -->
                        </div>
                        <!-- Fecha div class row -->
                    </div>
                    <!-- Fecha div tab-pane Projects Management -->
                    <!------------------------------------------------------------ END PROJECTS MANAGEMENT --------------------------------------------------------------------------->


                    <!--------------------------------------------------------- COMMENTS MANAGEMENT -------------------------------------------------------------------------------------->

                    <div class="tab-pane fade " id="commentsManagement">
                        <!---------------------------------------------- LIST OF COMMENTS APROVED REJECTED AND DELETED ------------------------------------------------------------------>
                        <div class="row padding-Top">
                            <div class="container">
                                <ul class="nav nav-pills  nav-justified">
                                    <!-- Declaração das Réguas -->
                                    <li class="active"><a href="#commentPending" data-toggle="tab">Comments Pending</a>
                                    </li>
                                    <li><a href="#commentAproved" data-toggle="tab">Comments Aproved</a></li>
                                    <li><a href="#commentRejected" data-toggle="tab">Comments Rejected</a></li>
                                    <li><a href="#commentDeleted" data-toggle="tab">Comments Deleted</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-------------------------------------------------------------- COMMENTS PENDING ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in active" id="commentPending">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsPending">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Pending Aproval</strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($commentsPending as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td><?= $comment->user_name ?></td>
                                                        <td align="center">
                                                            <a href="aproveComment.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                            <a href="rejectCommentForm.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-warning btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Reject"><span
                                                                        class="glyphicon glyphicon-ban-circle"></span>
                                                                </button>
                                                            </a>
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
                                        <!-- Fecha Painel Comments pending-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments pending-->


                                    <!-------------------------------------------------------------- COMMENTS APROVED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="commentAproved">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsAproved">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Aproved </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($commentsApproved as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td><?= $comment->user_name ?></td>
                                                        <td align="center">
                                                            <a href="rejectCommentForm.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-warning btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Reject"><span
                                                                        class="glyphicon glyphicon-ban-circle"></span>
                                                                </button>
                                                            </a>
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
                                        <!-- Fecha Painel Comments Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Aproved-->


                                    <!-------------------------------------------------------------- COMMENTS REJECTED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="commentRejected">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsRejected">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Rejected </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($commentsRejected as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjectName($comment->project_id) ?></td>
                                                        <td><?= $comment->user_name ?></td>
                                                        <td align="center">
                                                            <a href="aproveComment.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
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

                                    <!-- COMMENTS DELETED -->

                                    <div class="tab-pane fade" id="commentDeleted">
                                        <div class="panel panel-primary panel-responsive" id="panelCommentsDeleted">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Comments
                                                        Deleted </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($commentsDeleted as $comment) { ?>
                                                    <tr>
                                                        <td><?= $comment->comment ?></td>
                                                        <td><?= $projectControler->getProjctState($comment->project_id) ?></td>
                                                        <td><?= $comment->user_name ?></td>
                                                        <td align="center">
                                                            <a href="aproveComment.php?comment_id=<?= $comment->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel Comments Deleted-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Delected-->
                                </div>
                                <!-- Fecha o Tab-content comments rejected e deleted-->
                            </div>
                            <!-- Fecha div class Container -->
                        </div>
                        <!-- Fecha div class row -->
                    </div>
                    <!-- Fecha div tab-pane Comments Management -->
                    <!------------------------------------------------------------ END COMMENTS MANAGEMENT --------------------------------------------------------------------------->

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
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Pending Aproval</strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>


                                                <?php foreach ($tagsPending as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td><?= $accountController->getUserName($tag->added_by) ?></td>
                                                        <td align="center">
                                                            <a href="aproveTag.php?tag_id=<?= $tag->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                            <button class="btn btn-warning btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Reject"><span
                                                                    class="glyphicon glyphicon-ban-circle"></span>
                                                            </button>
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
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsApproved as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td><?= $accountController->getUserName($tag->added_by) ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-warning btn-xs" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Reject"><span
                                                                    class="glyphicon glyphicon-ban-circle"></span>
                                                            </button>
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
                                        <!-- Fecha Painel Comments Aproved-->
                                    </div>
                                    <!-- Fecha o Tab-pane Comments Aproved-->


                                    <!-------------------------------------------------------------- TAGS REJECTED ---------------------------------------------------------------------------------->
                                    <div class="tab-pane fade in" id="tagsRejected">
                                        <div class="panel panel-primary panel-responsive" id="panelTagsRejected">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Rejected </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsRejected as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td><?= $accountController->getUserName($tag->added_by) ?></td>
                                                        <td align="center">
                                                            <a href="aproveTag.php?tag_id=<?= $tag->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
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

                                    <!---------------------- TAGS DELETED ------------------------------------------------------------------------------------------->

                                    <div class="tab-pane fade" id="tagsDeleted">
                                        <div class="panel panel-primary panel-responsive" id="panelTagsDeleted">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3 class="panel-title text-center"><strong>Tags
                                                        Deleted </strong></h3></div>
                                            <div class="col-md-12 align-center inline">
                                                <br>
                                                <hr>
                                            </div>
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
                                                        User
                                                    </th>
                                                    <th class="text-center">Operations</th>
                                                </tr>

                                                <?php foreach ($tagsDeleted as $tag) { ?>
                                                    <tr>
                                                        <td><?= $tagsController->getTagName($tag->tag_id) ?></td>
                                                        <td><?= $projectControler->getProjectName($tag->project_id) ?></td>
                                                        <td><?= $accountController->getUserName($tag->added_by) ?></td>
                                                        <td align="center">
                                                            <a href="aproveTag.php?tag_id=<?= $tag->id ?>">
                                                                <button class="btn btn-success btn-xs"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Aprove"><span
                                                                        class="glyphicon glyphicon-ok"></span></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                            <div class="panel-footer">

                                            </div>
                                            <!-- fecha panel footer -->
                                        </div>
                                        <!-- Fecha Painel tags Deleted-->
                                    </div>
                                    <!-- Fecha o Tab-pane tags Delected-->
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
                <!-- Fecha Tab Connten das Secções Todas-->
            </div>
            <!-- Fecha div class row -->
        </div>
        <!-- Fecha Container das Seccções todas -->
    </div>
    <!-- Fecha OUTSIDE ROW -->
</div>  <!-- frcha alt5 -->



<?php require('MVC/Views/headerFooter/footer.view.php'); ?>