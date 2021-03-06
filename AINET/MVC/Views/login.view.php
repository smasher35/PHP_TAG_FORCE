<!--
	/**
	 * Created by PhpStorm.
	 * User: Paulo Penicheiro - 2130628
	 * Date: 20/04/2015
	 * Time: 21:14
	 */
 -->
<?php use Ainet\Support\HtmlHelper; ?>
<?php require('MVC/Views/headerFooter/header.view.php'); ?>

</div> <!-- Fecha a Navegation Bar principal localizada no ficheiro header.php-->
</header>

<a class="padding" id="goTop"></a>
<div class="alt5">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-primary" id="logPanel">
                    <div class="panel-body">
                        <div class="page-header">
                            <h3>Log in</h3>
                        </div>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="form-group">
                                <label for="inputEmail1">Email address</label>

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span
                                            class="glyphicon glyphicon-user"></span></span>
                                    <input type="email" class="form-control" name="email" id="inputEmail1"
                                           value="<?= $user->email ?>" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1">Password</label>

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span
                                            class="glyphicon glyphicon-asterisk"></span></span>
                                    <input type="password" class="form-control" name="password"
                                           value="<?= $user->password ?>" id="inputPassword1" placeholder="Password">
                                </div>
                                <?= HtmlHelper::error('email', $errors) ?>
                                <?= HtmlHelper::error('flags', $errors) ?>
                                <a href="#"><p class="textAlignRight">Forgot Password?</p></a>
                            </div>


                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Remember Me
                                </label>
                            </div>
                            <hr>
                            <!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button> -->
                            <button type="submit" name="login" class="btn btn-primary btn-block"><span
                                    class="glyphicon glyphicon-lock"></span> Login
                            </button>
                        </form>
                        <!-- Fecha <div Form> -->
                    </div>
                    <!-- Fecha <div Panel Body> -->
                    <div class="panel-footer">
                        <p id="panelFooter">&copy PHP TAG Force - 2015</p>
                    </div>
                    <!-- Fecha <div panel-footer> -->
                </div>
                <!-- Fecha <div panel panel-primary> -->
            </div>
            <!-- Fecha <div col-md-4> -->
            <div class="col-md-4"></div>
        </div>
        <!-- Fecha <div row> -->
    </div>
    <!-- Fecha <div Container> -->
</div> <!-- Fecha <div Alt1> -->

<?= require('AINET/MVC/Views/headerFooter/footer.view.php'); ?>
