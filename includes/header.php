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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.js.map"></script>
    <title>Document</title>
</head>

<body class="">
    <header class="container-fluid vw-100 mx-0 px-0">
        <nav class="navbar dark-mode" role="navigation">
            <a href="index.html" style="text-decoration: none; color: white;">
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
                        <a id="home_link" class="topnav_link" href="/">Accueil</a>
                        <a id="home_link" class="topnav_link" href="/">Bonjour 
                        <?php
                            if(isset($_SESSION["fn_user"])) {
        
                                echo $_SESSION["fn_user"];
                                echo "<a href = \"includes/logout.inc.php\">Logout</a>";
                            } else {
                                echo "Sign up";
                            }
                        ?>
                        </a>

                        
                        <a class="topnav_link" href="/about">Découvrez-nous</a>
                        <a class="topnav_link" href="/contact-us">Contact</a>
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
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/about">Découvrez-nous</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                            <li><a href="/privacy-policy">Espace personnel</a></li>
                            <li><a href="/terms-and-conditions">Termes et Conditions</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

    </header>

