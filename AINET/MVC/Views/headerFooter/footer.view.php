<div class="alt2">
    <footer>
        <!-- THE CREW -->
        <div class="col-md-3">
            <p><h5>The Crew</h5></p>
            </hr>
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-1"><h5>&copy; PHP TAG
                    FORCE 2015</h5></button>
            </hr>
        </div>

        <!-- SOCIAL NETWORKS -->
        <div class="col-md-3">
            <p><h5>Follow us on Social Networks</h5></p>
            <a href="http://www.facebook.com" target="_blank"><i
                    class="fa fa-facebook-square fa-2x socialNetworksIcons"></i></a>
            <a href="http://www.twitter.com" target="_blank"><i
                    class="fa fa-twitter-square fa-2x socialNetworksIcons"></i></a>
            <a href="http://www.googleplus.com" target="_blank"><i
                    class="fa fa-google-plus-square fa-2x socialNetworksIcons"></i></a>
            <a href="http://www.linkedin.com" target="_blank"><i
                    class="fa fa-linkedin-square fa-2x socialNetworksIcons"></i></a>
            <a href="http://www.vimeo.com" target="_blank"><i class="fa fa-vimeo-square fa-2x socialNetworksIcons"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i
                    class="fa fa-youtube-square fa-2x socialNetworksIcons"></i></a>
        </div>
        <!-- THE CREW -->
        <div class="col-md-3">
            <p><h5>Newsletter</h5></p>
            <br>

            <div class="form-group">
                <label for="inputEmail1">Subscribe our Monthly Newsletter</label>

                <div class="input-group">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Enter email">
						<span class="input-group-btn">
				                    <a href="MVC/Views/errors/404.html"><button class="btn btn-success"><span class="glyphicon glyphicon-hand-right"></span>
                                    </button></a>
						</span>
                </div>
            </div>
        </div>
        <!-- POWERED BY -->
        <div class="col-md-3">
            <p><h5>Powered by:</h5></p>
            <!-- class <i> é dos icons do Font Aewsome -->
            <i class="fa fa-html5 fa-2x socialNetworksIcons"></i>
            <i class="fa fa-css3 fa-2x socialNetworksIcons"></i>
            <i class="fa fa-github-square fa-2x socialNetworksIcons"></i>
            <i class="fa fa-windows fa-2x socialNetworksIcons"></i>
        </div>
        <!-- BOTÃO GO TOP -->
        <br/> <a href="#goTop" class="go-top"><h3 class="glyphicon glyphicon-chevron-up"></h3></a>
</div>
<!-- <div class="row" > para dar uma pequena margem no fundo  -->
<div class="row"></div>
<!-- Janela MODAL -- The Crew -- -->
<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">The Crew</h3>
            </div>
            <div class="modal-body">
                <div class="panel panel-primary">
                    <div class="panel-heading"
                    <h3 class="panel-title">The Programmers</h3></div>

                <table class="table">
                    <tr>
                        <td><img src="Storage/Images/crew/paulo.jpg" class="img-circle img-responsive" id="imgTable">
                        </td>
                        <td>Paulo Penicheiro<br>2130628</td>
                    </tr>

                    <tr>
                        <td><img src="Storage/Images/crew/ruben.jpg" class="img-circle img-responsive" id="imgTable">
                        </td>
                        <td>Ruben Miguel<br>2130664</td>
                    </tr>

                    <tr>
                        <td><img src="Storage/Images/crew/alfredo.jpg" class="img-circle img-responsive" id="imgTable">
                        </td>
                        <td>Alfredo Rosa<br>2130647</td>
                    </tr>

                </table>

                <div class="panel-footer">
                    &copy; PHP TAG FORCE - All rights reserved
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <a href="" class="btn btn-primary" data-dismiss="modal">Close</a>
        </div>
    </div>
</div>
<!-- FIM JANELA MODAL -->
</footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"><?= require('javaScript/smoothPageTransition.js'); ?></script>
<script>
    //chama a função que permite o deslocar suave entre seccções
    <?=require('javaScript/smoothScrolling.js');?>
    //chama a função do botão lateral para ir para o topo
    <?=require('javaScript/goTopButton.js');?>
    //inicialização das tooltips por uma questão de performance e optimização
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>