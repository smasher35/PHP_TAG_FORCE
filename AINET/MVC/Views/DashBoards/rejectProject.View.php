<?php require('MVC/Views/headerFooter/header.view.php');?>

<!-- SUBNAVBAR  permite assim cada pasta ter as suas subseccões próprias -->
<div class="row" id="subNavBar" xmlns="http://www.w3.org/1999/html">
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

<div class="alt1">
    <div class="row">
        <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="rejectProject.php" method="post">
                            <div class="panel">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Refusal Reason</h4>
                                    <hr>
                                    <p class="section-title"><h3>Project: <strong><?=$projectController->getProjectName( $projectId)?></p></strong></h3>
                                </div>
                                <div class="panel-body">
                                    <label for="refusalMessage" >Refusal Message</label>
                                     <input type="hidden" id="project_id" name="project_id" value="<?php echo $projectId; ?>">
                                    <textarea  id="refusalMessage" name="refusalMessage" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="panel-footer align-right">
                                    <a href="dashboards.php" ><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                </form>
            </div><!-- Fecha class col-md-6 -->
            <div class="col-md-3"></div>
        </div><!-- Fecha class container -->
    </div><!-- Fecha class Row -->
</div><!-- Fecha class Alt1 -->

<?php require('MVC/Views/headerFooter/footer.view.php');?>