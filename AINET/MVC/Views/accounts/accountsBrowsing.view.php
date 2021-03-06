<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 23/04/2015
	 * Time: 12:01
	 */
 -->

<?php require('MVC/Views/headerFooter/header.view.php'); ?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
    <div class="container">
        <div class="center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#goTop"><strong id="subNavButtons"> </strong></a></li>
                    <li role="presentation"><a href="#accountsList"><strong id="subNavButtons"> </strong></a></li>
                    <li role="presentation"><a href="#contact"><strong id="subNavButtons"> </strong></a></li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<!-- JUMBOTRON -->
<div class="row " id="jumboTronAccountsBrowser">
    <div class="container">
        <h1><b>Accounts Browser!</b></h1>

        <p class="lead">Summarized existing user accounts in database</p>
    </div>
</div>

<!-- TAbela com a listagem das user accounts -->
<a class="padding" id="accountsList"></a>
<div class="alt1">
    <div class="row">
        <div class="container">
            <div class="panel panel-primary panel-responsive" id="panelProjectsExplorer">
                <!-- Default panel contents -->
                <div class="panel-heading"><h3 class="panel-title text-center"><strong>Accounts List </strong></h3>
                </div>

                <!-- Table -->
                <table class="table table-stripped table-hover table-responsive">
                    <tr>
                        <th class="text-center">Thumb</th>
                        <th class="text-center"><a href="accountsBrowsing.php?orderBy=<?= 'name' ?>&page=<?= $page ?>">
                                <button type="submit" name='orderBy'
                                        class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                            </a> Name
                        </th>
                        <th class="text-center"><a
                                href="accountsBrowsing.php?orderBy=<?= 'institution' ?>&page=<?= $page ?>">
                                <button type="button"
                                        class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                            </a> Institution
                        </th>
                        <th class="text-center"><a
                                href="accountsBrowsing.php?orderBy=<?= 'position' ?>&page=<?= $page ?>">
                                <button type="button"
                                        class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                            </a> Position
                        </th>
                        <th class="text-center"><a href="accountsBrowsing.php?orderBy=<?= 'role' ?>&page=<?= $page ?>">
                                <button type="button"
                                        class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                            </a> Role
                        </th>
                        <th class="text-center"><a
                                href="accountsBrowsing.php?orderBy=<?= 'profile_url' ?>&page=<?= $page ?>">
                                <button type="button"
                                        class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button>
                            </a> Website
                        </th>
                        <th class="text-center">Show Projects</th>
                        <th class="text-center">Contact Me</th>
                        <th class="text-center">Details</th>
                    </tr>

                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td align="center"><img class="img-circle img-profile-thumbnail"
                                                    src="<?= $accountController->getProfileImgUrl($user->id) ?>"></td>
                            <td><?= $user->name ?></td>
                            <td><?= $institutionController->getInstitutionName($user->institution_id) ?></td>
                            <td align="center"><?= $user->position ?></td>
                            <td align="center"><?= $accountController->getRoleName($user->role) ?></td>
                            <td><?= $user->profile_url ?></td>

                            <td align="center"><a href="projects.php?owner_id=<?= $user->id ?>"
                                <button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-book"></span>
                                </button>
                            </td>
                            <td align="center"><a href="mailto:'<?= $user->email ?>'">
                                    <button class="btn btn-success btn-xs"><span
                                            class="glyphicon glyphicon-envelope"></span></button>
                                </a></td>
                            <td><a href="accountDetails.php?owner_id=<?= $user->id ?>">
                                    <button class="btn btn-info btn-xs align-center" data-toggle="tooltip"
                                            data-placement="bottom" title="View Account"><span
                                            class="glyphicon glyphicon-book"></span></button>
                                </a></td>
                        </tr>
                    <?php } ?>
                </table>
                <!-- Fim da TAbela -->

                <div class="panel-footer" align="center">
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="accountsBrowsing.php?page=<?= $page - 1 ?>&orderBy=<?= $orderBy ?>">&laquo;</a>
                                </li>
                                <?php for ($i = 1; $i <= $lastPage; $i++) { ?>
                                    <?php if ($i == $page) { ?>
                                        <li class="active"><a
                                                href="accountsBrowsing.php?page=<?= $i ?>&orderBy=<?= $orderBy ?>"><?= $i ?></a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="accountsBrowsing.php?page=<?= $i ?>&orderBy=<?= $orderBy ?>"><?= $i ?></a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <li>
                                    <a href="accountsBrowsing.php?page=<?= $page + 1 ?>&orderBy=<?= $orderBy ?>">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <?php require('MVC/Views/headerFooter/footer.view.php'); ?>
</div>
