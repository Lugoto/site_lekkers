<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/icon.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <script src="js/jquery-1.12.3.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Lekkers</title>
</head>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="http://lekkersfrance.com" class="brand-logo">
                <div class="logoImg">
                    <img src="img/gallery/Goute%20d'eau%20pour%20logo.png" alt="gouttes d'eau">
                    <img src="img/bagelogo%20VECTOR%20LEKKERS.png" alt="Logo lekkers bagels station">
                </div>
            </a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <li><a href="qualite.php">La Qualité</a></li>
                <li><a href="carte.php">La Carte</a></li>
                <li><a href="event.php">Info/Event</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="https://www.foodora.fr/restaurant/s0tu/lekkers" class="white waves-effect waves-light btn red-text darken-4">Je Commande</a></li>
            </ul>
            <ul class="soc right hide-on-med-and-down">
                <li><a class="soc-facebook" href="https://www.facebook.com/Lekkersbagels/?fref=ts"></a></li>
                <li><a class="soc-google" href="https://plus.google.com/114124877096695702602"></a></li>
                <li><a class="soc-instagram" href="https://www.instagram.com/lekkersbagels/?hl=fr"></a></li>
            </ul>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="qualite.php">La qualité</a></li>
                <li><a href="carte.php">La carte</a></li>
                <li><a href="event.php">Info/Event</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="https://www.foodora.fr/restaurant/s0tu/lekkers" class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
            </ul>
        </div>
    </nav>
</div>


<div class="no">
    <body>

    <div class="acceuil">
        <img srcset="img/gallery/Fond%20Mobil.jpg 900w, img/gallery/Fond%20site.jpg 1920w"
             src="img/gallery/Fond%20site.jpg"
             alt=""
        >
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $("select").material_select();
            $(".dropdown-button").dropdown({hover: false});
        });
    </script>
    </body>
</div>
</html>
