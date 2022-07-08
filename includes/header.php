<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body class="">
    <header class="container-fluid vw-100 mx-0 px-0">
        <nav class="navbar dark-mode" role="navigation">
            <a href="index.php" style="text-decoration: none; color: white;">
                <div class="navbar__logo">
                    <figure><img class="logoHeader " src="img/logo-blanc.png">
                        <figcaption style="padding: 0; margin: 0 auto;">
                            <h2 class="h5">Savitor</h2>
                        </figcaption>
                    </figure>
                </div>
            </a>
            <div id="root">
                <div id="topnav" class="topnav">

                    <!-- Classic Menu -->
                    <nav role="navigation" id="topnav_menu">
                        <a id="home_link" class="topnav_link" href="index.php">Accueil</a>
                        <?php
                        if (isset($_SESSION["fn_user"])) {
                        ?>
                            <a class="topnav_link" href="compte.php">Mon compte</a>
                        <?php
                        } else {
                        ?>
                            <a class="topnav_link" href="loginregister.php">Connextion | Inscription</a>
                        <?php
                        }
                        ?>
                        <a class="topnav_link" href="flotte.php">Tous nos modèles</a>
                        <a class="topnav_link" href="contact.php">Contact</a>

                    </nav>

                    <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
                        <!-- Some spans to act as a hamburger -->
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                    <!-- Responsive Menu -->
                    <nav role="navigation" id="topnav_responsive_menu">
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <?php
                            if (isset($_SESSION["fn_user"])) {
                            ?>
                                <a class="topnav_link" href="compte.php">Mon compte</a>
                            <?php
                            } else {
                            ?>
                                <a class="topnav_link" href="loginregister.php">Connextion | Inscription</a>
                            <?php
                            }
                            ?>
                            <li><a href="flotte.php">Tous nos modèles</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="/terms-and-conditions">Termes et Conditions</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </header>
    