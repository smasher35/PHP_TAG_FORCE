<?php require('MVC/Views/headerFooter/header.view.php'); ?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar">
	<div class="container">
		<div class="center">
			<div class="col-md-12 col-lg-offset-4">
					<ul class="nav nav-pills">
						<li role="presentation"><a href="#goTop"><strong id="subNavButtons">Top</strong></a></li>
						<li role="presentation"><a href="#generalData"><strong id="subNavButtons">General</strong></a></li>
						<li role="presentation"><a href="#specifications"><strong id="subNavButtons">Specifications</strong></a></li>
						<li role="presentation"><a href="#comments"><strong id="subNavButtons">Comments</strong></a></li>
					</ul>
			</div>
		</div>
	</div>
</div> <!-- fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<!---------------------------------------------------------- HEADER ----------------------------------------------------------------------------------------------->
<a class="padding" id="goTop"></a>
<div class="alt8">
    <div class="row techSheetHeader">
        <div class="container">
            <div class="col-md-12 col-md-offset-2">
                <p>Created: <?= $actualproject->created_at ?> | Updated At: <?= $actualproject->updated_at ?> | Started at: <?= $actualproject->started_at ?>  | Finished at: <?= $actualproject->finished_at ?> | Aproved by: <?= $accountController->getUserName($actualproject->approved_by) ?> </p>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------------------------- TECHNICAL SHEET ----------------------------------------------------------------------------------------------->

<div class="alt10">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-12">
                <div class="center">
                    <h2>Project <strong>Technical Sheet</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div><!-- fecha col-md-12 -->
            <div class="col-md-12 padding-Top">
                <?php if ($actualproject->state == 0 && ($actualUserRole == 1 || $actualUserRole == 4)) { ?>
    <button class="btn btn-block btn-warning btn-lg">PROJECT PENDING APROVAL</button>
<?php } elseif ($actualproject->state == 1 && ($actualUserRole == 1 || $actualUserRole == 4)) { ?>
    <button class="btn btn-block btn-success btn-lg">PROJECT APROVED</button>
<?php } else {
    if ($actualUserRole == 1 || $actualUserRole == 4) { ?>
        <button class="btn btn-block btn-danger btn-lg">PROJECT REJECTED OR DELETED</button>
    <?php }
} ?>
            </div>

        </div><!-- fecha row titulo -->
    </div>
</div>

<!---------------------------------------------------------- GENERAL DATA ----------------------------------------------------------------------------------------------->
<a class="padding" id="generalData"></a>
<div class="alt1">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-12">
                <div class="center">
                    <h2>General <strong>Data</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div><!-- fecha col-md-12 -->
        </div>
        <!---------------------------------------------------------- IMAGE, KEWYWORDS, TAGS------------------------------------------------------------------------------->
        <div class="row align-center padding">
            <!-- imagem, keywords e tags -->
            <div class="col-md-6">
                 <td align="center "><img  class=" text-center thumbnail img-project-details" src="<?= $projectController->getProjectImage($actualproject->id) ?>"></td>
                <hr>
                <div class="row align-left tagsKeywords">
                    <p>
                         <div class="panel panel-default">
                            <div class="panel-heading"><strong>Keywords</strong> </div>
                                <div class="panel-body">
                                    <?= $actualproject->keywords ?>
                                </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading"><strong>Tags</strong> </div>
                                <div class="panel-body">
                                   <?php $tags = $projectTagsController->listTagsByProject($actualproject->id) ?>
                                    <?php foreach ($tags as $tag) { ?>
                                        #<?= $tagsController->getTagName($tag->tag_id) ?>,
                                    <?php } ?>
                                </div>
                         </div>
                    </p>
                </div>
            </div>

            <!---------------------------------------------------------- DADOS GERAIS ------------------------------------------------------------------------------->
            <div class="col-md-6">
                <div class="left">
                    <p class="techSheetDetails">
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Keywords</strong> </div>
                                <div class="panel-body text-left">
                                    <h4 ><strong>Acronym: </strong> <span><?= $actualproject->acronym ?></span></h4>
                                    <h4><strong>Theme: </strong><span><?= $actualproject->theme ?></span></h4>
                                    <h4><strong>Type: </strong><span><?= $actualproject->type ?></span></h4>
                                </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Project Name</strong> </div>
                                <div class="panel-body">
                                    <h3><strong><?= $actualproject->name ?></strong></h3>
                                </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Author</strong> </div>
                                <div class="panel-body">
                                    <h4><?= $accountController->getUserName($actualproject->created_by) ?></h4>
                                </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Desciption</strong> </div>
                                <div class="panel-body">
                                    <p><?= $actualproject->description ?><br></p>
                                </div>
                        </div>
                    </p>
                </div><!-- fecha center --->
            </div><!-- fecha dados gerais --->
        </div><!-- fecha row --->
    </div><!-- fecha container -->
</div><!-- fecha GENERAL DATA --->

<!---------------------------------------------------------- SOFTWARE, HARDWARE, OBS, TEAM ELEMENTS ----------------------------------------------------------------------------------------------->
<a class="padding" id="specifications"></a>
<div class="alt9">
    <div class="row">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-12">
                    <div class="align-center" style="color: #ffffff">
                        <h2>Specifications <strong>Section</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 padding">
                <ul class="nav nav-pills nav-justified orange">
                    <li class="activeAccounts active"><a href="#software" data-toggle="tab">Software</a></li>
                    <li><a href="#hardware" data-toggle="tab">Hardware</a></li>
                    <li><a href="#teamElements" data-toggle="tab">Team Elements</a></li>
                    <li><a href="#observations" data-toggle="tab">Obervations</a></li>
                </ul>
                <div class="tab-content techSheetTabs">
                    <!----------------- SOFTWARE ------------------------------>
                    <div class="tab-pane fade in active" id="software">
                        <p class="padding">
                            <?= $actualproject->used_software ?>
                        </p>

                    </div><!-- fecha tab-pane software --->

                     <!----------------- HARDWARE ------------------------------>
                    <div class="tab-pane fade in " id="hardware">
                        <p class="padding">
                            <?= $actualproject->used_hardware ?>
                        </p>

                    </div><!-- fecha tab-pane hardware --->

                     <!----------------- TEAM ELEMENTS ------------------------------>
                     <div class="tab-pane fade in" id="teamElements">
                        <table class="table table-stripped table-responsive">
                            <tr>
                                <th><h3><strong>Name</strong></h3></th>
                                <th><h3><strong>Institution</strong></h3></th>
                            </tr>
                            <?php $teamMembers = $projectTeamMembersController->listTeamMembersByProject($actualproject->id) ?>
<?php foreach ($teamMembers as $user) { ?>
    <tr>
        <td><?= $accountController->getUserName($user->user_id) ?></td>
        <?php $insitutionID = $accountController->getUserInstitutionId($user->user_id) ?>
        <td><?= $institutionController->getInstitutionName($insitutionID) ?></td>

    </tr>
<?php } ?>

                        </table>


                    </div><!-- fecha tab-pane teamElements --->


                     <!----------------- OBSERVATIONS ------------------------------>
                    <div class="tab-pane fade in" id="observations">
                        <p class="padding">
                            <?= $actualproject->observations ?>
                        </p>
                    </div><!-- fecha tab-pane observations--->
                </div><!-- fecha tab-container --->
            </div><!-- fecha col-md-12 --->
        </div> <!-- fecha container --->
    </div> <!-- fecha row --->
</div><!-- Fecha HARDWARE, SOFTWARE, OBS -->

<!---------------------------------------------------------- COMMENTS SECTION ----------------------------------------------------------------------------------------------->
<a class="padding" id="comments"></a>
<div class="alt11">
    <div class="container">
        <div class="align-center">
            <h2>Comments <strong>Section</strong></h2>
            <div class="line">
                <hr>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="section-title center">
                <h3>Please leave your  <strong>Comment</strong></h3>
            </div>

            <form action="leaveComment.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="text-left">
                                <input type="hidden" name="project_id" value="<?= $actualproject->id ?>" />
                                <?php if ($authController->isAuthenticated()) { ?>
    <input type="hidden" name="name" value="<?= $accountController->getUserName($actualUser) ?>">
<?php } else { ?>
    <label for="inputYourName">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Input Your Name">

<?php } ?>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-left">

                        <label for="comment">Your Comment</label>
                        <div class="text-left">
							<textarea class="form-control" rows="3" name="comment" id="comment"></textarea>

						</div>
						<div class="text-right button-padding">
							<button type="submit" class="btn tf-btn btn-success">Submit</button>
						</div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class=" col-md-12">
                 <hr>
                <div class="panel panel-primary panel-responsive" id="panelCommentsPending">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3 class="panel-title text-center"><strong>List of Comments</strong></h3></div>
                        <!-- Table -->
                        <?php foreach ($commentsList as $comment) { ?>
    <?php
    if ($comment->user_name == null) {
        $userName = "Anonymous";
    } else {
        $userName = $comment->user_name;
    }
    ?>
    <div class="container">
        <div class="row">
            <p>(<?= $timeHelper->humanTiming(strtotime($comment->created_at)) ?> ago) <b><?= $userName ?></b> said:</p>
        </div>
        <div class="row">
            <p><?= $comment->comment ?></p>
        </div>
    </div>
    <hr>
<?php } ?>
                </div>
            </div><!-- Fecha Painel Comments pending-->
        </div><!-- fecha row -->
    </div><!-- Fecha container -->
</div><!-- Fecha COMMENTS SECTION -->






<?php require('MVC/Views/headerFooter/footer.view.php'); ?>