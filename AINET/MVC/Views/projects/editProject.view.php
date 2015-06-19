<?php use Ainet\Support\HtmlHelper; ?>
<?php require('MVC/Views/headerFooter/header.view.php'); ?>
<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias-->
<div class="row" id="subNavBar">
    <div class="container">
        <div class="center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#goTop"><strong id="subNavButtons"></strong></a></li>
                    <li role="presentation"><a href="#contact"><strong id="subNavButtons"></strong></a></li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</div> <!--fecha a sub navigation Bar -->
</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<div class="alt1">
    <div class="row">
        <div class="container">
            <div class="panel panel-primary" id="logPanel">
					<div class="panel-body">
						<div class="page-header">
							<h3 class="inline">Edit Project  </h3><span>(<b class="asterisco">  *</b> - Required Fields )</span>
							<?= HtmlHelper::error('requiredFields', $errors) ?>
						</div>

                        <form action="editProject.php" method="post" >
                                <input type="hidden" name="project_id" value="<?= $actualProject->id ?>">
                                <!-- FORM AREA SUPERIOR -->
                                <div class="row container">
                                    <div class="col-md-12 col-md-offset-1 noPadding">
                                         <div class="form-group form-inline">
                                            <label for="inputAcronym"><span>Acronym</h3></span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-quote-right"></i></span></span>
                                                <input type="text" class="form-control" name="acronym" id="inputAcronym" value="<?= $actualProject->acronym ?>" placeholder="Enter Acronym">
                                            </div>

                                            <label for="inputTheme"><span> Theme</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-desktop"></i></span></span>
                                                <input type="text" class="form-control" name="theme" id="inputTheme" value="<?= $actualProject->theme ?>" placeholder="Enter Theme">
                                            </div>

                                             <label for="inputType"><span> Type</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-th-large"></i></span></span>
                                                <input type="text" class="form-control" name="type" id="inputType" value="<?= $actualProject->type ?>" placeholder="Enter Type">
                                            </div>

                                        </div><!-- Fecha class FORM-GROUP -->
                                    </div>
                                </div><!-- FORM AREA SUPERIOR -->
                                <hr class="noPadding">

                                <!-- FORM AREA ESQUERDA -->
                                <div class="col-md-8">
                                    <div class="form-group">
                                            <label for="inputName"><span><b class="asterisco">*</b> Name</h3></span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-file-text"></i></span></span>
                                                <input type="text" class="form-control" name="name" id="inputName" value="<?= $actualProject->name ?>" placeholder="Enter Name">
                                            </div>

                                            <label for="inputDescription"><span><b class="asterisco">*</b> Description</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-info"></i></span></span>
                                                <textarea type="textArea" class="form-control" rows="4" name="description" id="inputDescription" placeholder="Enter Description"> <?= $actualProject->description ?></textarea>
                                            </div>
                                            <hr>


                                    </div><!-- Fecha class FORM-GROUP -->
                                     <div class="form-group form-inline">
                                     <label for="inputStartedAt"><span><b class="asterisco">*</b> Start Date </span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-calendar"></i></span></span>
                                                <input type="date" class="form-control" name="started_at" value="<?= $actualProject->started_at ?>" id="inputStartedAt">
                                            </div>

                                            <label for="inputFinishedAt"><span>Finish Date </span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-calendar"></i></span></span>
                                                <input type="date" class="form-control" name="finished_at" value="<?= $actualProject->finished_at ?>" id="inputFinishedAt">
                                            </div>

                                     </div>
                                      <div class="col-md-10 col-md-offset-1">
                                         <label for="inputObservations"><span> Observations</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-bars"></i></span></span>
                                                <textarea type="textArea" class="form-control" rows="4" name="observations" id="inputObservations" placeholder="Enter Observations"><?= $actualProject->observations ?></textarea>
                                            </div>
                                        </div><!-- Fecha class FORM-GROUP -->

                                </div><!-- Fecha class col-md-8 MARGEM ESQUERDA -->

                                <!-- FORM AREA DIREITA -->
                                <div class="col-md-4 myBorderleft">
                                    <div class="form-group">
                                        <label for="inputSoftware"><span> Software</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-laptop"></i></span></span>
                                                <textarea type="textArea" class="form-control" rows="4" name="software" id="inputSoftware" placeholder="Enter Software"><?= $actualProject->used_software ?></textarea>
                                            </div>

                                            <label for="inputHardware"><span> Hardware</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-cogs"></i></span></span>
                                                <textarea type="textArea" class="form-control" rows="4" name="hardware" id="inputHardware" placeholder="Enter Hardware"><?= $actualProject->used_hardware ?></textarea>
                                            </div>
                                            <label for="inputKeyword"><span> Keywords</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-key"></i></span></span>
                                                <input type="text" class="form-control" name="keywords" id="inputKeyword" value="<?= $actualProject->keywords ?>" placeholder="Enter Keywords">
                                            </div>

                                            <label for="inputTag"><span> Tags</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"><span <i class="fa fa-tags"></i></span></span>
                                                <select class="form-control dropDownMaxWith" name="tag" id="inputTag" size="8">
                                                    <?php foreach ($allTags as $tag) { ?>
    <option value="<?= $tag->id ?>"><?= $tag->tag ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <a href="#"><button  class="btn btn-info noPadding"><span class="glyphicon glyphicon-plus-sign"></span> Tags</button></a>
                                            </div>

                                            <p class="text-center"><strong>Insert Team Elements</strong></p>
                                            <a href="#"><button  class="btn btn-info noPadding btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Team Elements</button></a>

                                    </div><!-- Fecha class FORM-GROUP -->
                                </div><!-- Fecha class col-md-8 MARGEM DIREITA -->


                                <!-- FORM AREA INFERIOR -->
                                <div class="row container">

                                </div><!-- FECHA FORM AREA INFERIOR -->


                                <hr>
                                <div class="col-md-6-rightAlign">
                                    <a class="btn btn-success" href="dashBoards.php"><span class="glyphicon glyphicon-arrow-left" ></span> Cancel</a>
                                    <!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button> -->
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Submit</button>
                                </div>
                        </form><!-- Fecha class form -->
					</div><!-- Fecha class panel-body -->
					<div class="panel-footer">
						<p id="panelFooter"><strong>&copy PHP TAG Force - 2015</strong></a></p>
					</div>
			</div><!-- Fecha class panel--primary -->
        </div><!-- Fecha Container -->
    </div><!-- Fecha Row -->
</div><!-- Fecha ALt11 -->














<?php require('MVC/Views/headerFooter/footer.view.php'); ?>