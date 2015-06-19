<?php require('MVC/Views/headerFooter/header.view.php'); ?>


    <div class="alt1">
        <div class="row">
            <div class="container">
                <div class="panel panel-primary panel-responsive" id="panelProjectsAproved">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3 class="panel-title text-center"><strong>My Projects</strong></h3>
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

                        <?php foreach ($projectsByOwner as $project2) { ?>
                            <tr>
                                <td><?= $project2->name ?></td>
                                <td><?= $project2->type ?></td>
                                <td><?= $project2->theme ?></td>
                                <td align="center">
                                    <a href="projectDetails.php?project_id=<?= $project2->id ?>">
                                        <button class="btn btn-info btn-xs" data-toggle="tooltip"
                                                data-placement="bottom" title="View Project"><span
                                                class="glyphicon glyphicon-book"></span></button>
                                    </a>
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
                                <!-- Fecha div class pagination -->
                            </div>
                            <!-- Fecha div class col-md-12 -->
                        </div>
                        <!-- Fecha div class row text-center -->
                        <!-- /.row -->
                    </div>
                    <!-- fecha panel footer -->
                </div>
                <!-- Fecha Painel Projects Aproved-->
            </div>
        </div>
    </div>




<?php require('MVC/Views/headerFooter/footer.view.php'); ?>