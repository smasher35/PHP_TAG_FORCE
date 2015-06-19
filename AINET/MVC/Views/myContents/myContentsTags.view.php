<?php require('MVC/Views/headerFooter/header.view.php'); ?>


    <div class="alt1">
        <div class="row">
            <div class="container">
                <div class="panel panel-primary panel-responsive" id="panelProjectsAproved">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3 class="panel-title text-center"><strong>My Tags</strong></h3></div>
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
                        </tr>


                        <?php foreach ($tagsByOwner as $tag) { ?>
                            <tr>
                                <td class="text-center"><?= $tagsController->getTagName($tag->id) ?></td>
                                <td class="text-center"><?= $projectControler->getProjectName($tag->project_id) ?></td>
                            </tr>

                        <?php } ?>
                    </table>
                    <div class="panel-footer">
                        <!-- Pagination -->
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <ul class="pagination">
                                    <li>
                                        <a href="myContentsTags.php?page=<?= $page - 1 ?>&owner_id=<?= $currentUserID ?>">&laquo;</a>
                                    </li>
                                    <?php for ($i = 1; $i <= $lastPage; $i++) { ?>
                                        <?php if ($i == $page) { ?>
                                            <li class="active"><a
                                                    href="myContentsTags.php?page=<?= $i ?>&owner_id=<?= $currentUserID ?>"><?= $i ?></a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="myContentsTags.php?page=<?= $i ?>&owner_id=<?= $currentUserID ?>"><?= $i ?></a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                    <li>
                                        <a href="myContentsTags.php?page=<?= $page + 1 ?>&owner_id=<?= $currentUserID ?>">&raquo;</a>
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