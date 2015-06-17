<?php

use \AINET\MVC\Controllers\AuthenticationController;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- por causa das resoluções dos ecrãs móveis -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?= $title ?></title>

	<!-- Controla o menu superior caso esteja login passa a logou e vice-verça -->
	<?php
		$controller = new AuthenticationController();
		$isAuthenticated = $controller->isAuthenticated();


		if($isAuthenticated){
			$idSession = 'Logout';
			$sessionHref = 'logout.php';
		}else {
			$idSession = 'Login';
			$sessionHref = 'login.php';
		}
	?>

    <!-- Personal Styles -->
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">

	<!-- Font Aewsome - Social Network Icons -->
	<link href="fontAewsome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- animsition CSS -->
	<link rel="stylesheet" href="../dist/css/animsition.min.css">


	<!--
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="corpo">
<header>
    <!-- NAVIGATION BAR -->
    <div class="navbar-fixed-top navbar-inverse" id="navegacao">
        <div class="container">
            <div class="row noPadding">
                <div class="col-md-4">
                    <div class="navbar-brand">
                        <a href="index.php"><img src="Storage/Images/logo.png" alt="logo"></a>
                    </div>
	                <div class="navbar-form">
	                    <div class="container">
		                    <div class="input-group padding-Top-Nav">
                                <form action="projects.php" method="get">
			                        <input type="text" name="search" id="search" class="form-control form-search  search-query"  placeholder="Search Projects...">
			                        <span class="input-group-btn">
				                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			                        </span>
                                </form>
		                    </div>
	                    </div>
	                </div>
                </div>
                <div class="col-md-8">
	                <button class="navbar-toggle " data-toggle="collapse" data-target =".navHeaderCollapse">Menu</button>
	                <div class="collapse navbar-collapse navHeaderCollapse">
	                    <ul class="nav navbar-nav navbar-right">
	                        <li><a class="transition" href="index.php"><strong>Home</strong></a></li>
	                        <li><a class="transition" href="projects.php?owner_id=<?=0?>"><strong>Projects</strong></a></li>
	                        <li><a class="transition" href="dashBoards.php"><strong>Dashboard</strong></a></li>
		                    <li><a class="transition" href="accountsBrowsing.php"><strong>Accounts</strong></a></li>

                            <?php if ($isAuthenticated) {?>
                            <li class="dropdown">

                                    <button class="btn btn-primary dropdown-toggle" type="button" id="myAccountActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?=$actualUserName?><span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="myAccountActions">
                                        <li><a href="projects.php?owner_id=<?=$actualUser?>">My Projects <span class="glyphicon glyphicon-book"></span></li></a>
                                        <li><a href="editAccountPage.php?account_id=<?=$actualUser?>">Edit My Account <span class="glyphicon glyphicon-cog"></span></a></li>
                                        <li><hr></li>
                                        <li><a class="transition" href="<?=$sessionHref?>"><strong><?= $idSession?></strong> <span class="glyphicon glyphicon-log-out"></span></a></li>
                                    </ul>

                            </li>
                                <br>
                            <?php } else { ?>
                            <li><a class="transition" href="<?=$sessionHref?>"><strong><?= $idSession?></strong></a></li><br>
                            <?php } ?>
	                    </ul>
	                </div>
                </div>
            </div>
        </div>
