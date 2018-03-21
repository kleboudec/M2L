<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portail de la M2L</title>

    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet" >
    <link href="./public/css/sticky-footer-navbar.css" rel="stylesheet" >


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?uc=accueil">Maison des Ligues de Lorraine</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown" class="active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">M2L en pratique <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="index.php?uc=m2lpratiques&action=presentation">Présentation de la M2L</a></li>

                        <li><a href="index.php?uc=m2lpratiques&action=locaux">Les locaux</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header">Les services proposés</li>

                        <li><a href="index.php?uc=m2lpratiques&action=telecommunications">Télécommunications</a></li>

                        <li><a href="index.php?uc=m2lpratiques&action=communications">Communications</a></li>

                        <li><a href="index.php?uc=m2lpratiques&action=modalites">Modalités d'accès</a></li>

                        <li><a href="index.php?uc=m2lpratiques&action=ServicesInformatiques">Services informatiques</a></li>


                    </ul>
                </li>
                <li><a href="index.php?uc=ligues&action=afficherDepartements">Les ligues</a></li>

                <?php

                    if(!isset($_SESSION['idUtilisateur']))
                    {
                ?>

                        <li><a href="index.php?uc=intranet&action=accueil">Intranet de la M2L</a></li>

                <?php
                    }
                else {
                ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace personnel <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Voir mes réservations</a></li>
                        <li><a href="#">Annuler une réservation</a></li>
                        <li><a href="index.php?uc=deconnexion&action=deconnexion"">Se déconnecter</a></li>
                    </ul>
                </li>
<?php
}
?>

            </ul>
        </div>
    </div>
</nav>

<br/>
<br/>
<br/>