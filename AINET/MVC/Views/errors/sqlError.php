<?php use \AINET\MVC\Controllers\AuthenticationController;
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 19-06-2015
 * Time: 16:08
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
    <link rel="stylesheet" type="text/css" href="../../../Styles/styles.css">

    <!-- Font Aewsome - Social Network Icons -->
    <link href="../../../fontAewsome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- animsition CSS -->
    <link rel="stylesheet" href="../../../dist/css/animsition.min.css">


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
<body>
<div class="container">
    <div class="col-md-12">
        <div class="alert-warning">
            <h2>ERROR</h2>
            <p>Your request cannot be completed. Please try again later!</p>
        </div>
    </div>
</div>

</body>


