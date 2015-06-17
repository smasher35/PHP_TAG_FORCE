<?php use Ainet\Support\HtmlHelper;?>
<?php require('MVC/Views/headerFooter/header.view.php');?>
<!--/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 17-06-2015
 * Time: 11:23
 */-->
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
							<h3>Change <?=$account->name?> password</h3>
						</div>
						<form action="changePassword.php" method="post">
                            <input type="hidden" value="<?=$account->id?>" name="account_id" id="account_id"/>
                            <label for="inputPassword"><span><b class="asterisco">*</b> Password</span></label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
                            </div>
                            <label for="inputretypePassword"><span><b class="asterisco">*</b> Retype Password</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <input type="password" class="form-control" name="retypePass" id="inputretypePassword" placeholder="retype Password">
                                </div>

                                <div class="alert-warning"><?=HtmlHelper::error('missMatchPassword',$errorsPass)?></div>

                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>Change Password</button>
                        </form>
					</div> <!-- Fecha <div Panel Body> -->
					<div class="panel-footer">
							<p id="panelFooter">&copy PHP TAG Force - 2015</p>
					</div> <!-- Fecha <div panel-footer> -->
				</div> <!-- Fecha <div panel panel-primary> -->
			</div> <!-- Fecha <div col-md-4> -->
			<div class="col-md-4"></div>
		</div> <!-- Fecha <div row> -->
	</div> <!-- Fecha <div Container> -->
</div> <!-- Fecha <div Alt1> -->

<?php require('AINET/MVC/Views/headerFooter/footer.view.php');?>