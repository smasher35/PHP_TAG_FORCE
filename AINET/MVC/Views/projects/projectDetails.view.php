<?php require('MVC/Views/headerFooter/header.view.php');?>
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
            <div class="col-md-12">
                <p>Created: <?=$actualproject->created_at?> | Updated At: <?=$actualproject->updated_at?> | Started at: <?=$actualproject->started_at?>  | Finished at: <?=$actualproject->finished_at?> | Aproved by: <?=$actualproject->approved_by?> </p>
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
                 <td align="center"><img  class="img-circle img-project-details" src="<?=$projectController->getProjectImage($actualproject->id)?>"></td>
                <hr>
                <div class="row align-left tagsKeywords">
                    <p>
                        Keywords:<?=$actualproject->keywords?>
                        <br>
                        <br>
                        Tags: --> ligar à tabela project_tags <--

                    </p>
                </div>
            </div>

            <!---------------------------------------------------------- DADOS GERAIS ------------------------------------------------------------------------------->
            <div class="col-md-6">
                <div class="left">
                    <p class="techSheetDetails">
                        Acronym: <?=$actualproject->acronym?> <br>
                        Theme: <?=$actualproject->theme?> <br>
                        Type: <?=$actualproject->type?> <br>
                        Name: <h3><strong><?=$actualproject->name?><br></strong></h3>
                        Author: <?=$accountController->getUserName($actualproject->created_by)?><br>
                        <hr>
                        Description: <?=$actualproject->description?><br>
                    </p>
                </div><!-- fecha center --->
            </div><!-- fecha dados gerais --->
        </div><!-- fecha row --->
    </div><!-- fecha container -->
</div><!-- fecha GENERAL DATA --->

<!---------------------------------------------------------- SOFTWARE, HARDWARE, OBS ----------------------------------------------------------------------------------------------->
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
                    <li><a href="#observations" data-toggle="tab">Obervations</a></li>
                </ul>
                <div class="tab-content techSheetTabs">
                    <div class="tab-pane fade in active" id="software">
                        <p class="padding">
                            <?=$actualproject->used_software?>
                        </p>

                    </div><!-- fecha tab-pane software --->

                    <div class="tab-pane fade in " id="hardware">
                        <p class="padding">
                            <?=$actualproject->used_hardware?>
                        </p>

                    </div><!-- fecha tab-pane hardware --->

                    <div class="tab-pane fade in" id="observations">
                        <p class="padding">
                            <?=$actualproject->observations?>
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

                                <label for="inputYourName">Name</label>
                            </div>
                                <input type="hidden" name="project_id" value="<?=$actualproject->id?>" />
                                <input type="text" class="form-control" id="name" name="name" placeholder="Input Your Name">

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
                                if($comment->user_name == null) {
                                    $userName = "Anonymous";
                                }
                                else {
                                    $userName = $comment->user_name;
                                }
                        ?>
                        <div class="container">
                            <div class="row">
                                <p>(<?=$timeHelper->humanTiming(strtotime($comment->created_at))?> ago) <b><?=$userName?></b>  said:</p>
                            </div>
                            <div class="row">
                                <p><?= $comment->comment ?></p>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>
                        <table class="table table-stripped table-hover table-responsive">
                            <tr>
                                <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> Comment</th>
                                <th class="text-center"><button type="button" class="btn btn-default btn-xs glyphicon glyphicon glyphicon-sort"></button> User</th>
                            </tr>

                            <!-- TODO: substituir pelo foeach a percorrer os comentários existentes -->

                        </table>

                </div>
            </div><!-- Fecha Painel Comments pending-->
        </div><!-- fecha row -->
    </div><!-- Fecha container -->
</div><!-- Fecha COMMENTS SECTION -->






<?php require('MVC/Views/headerFooter/footer.view.php');?>