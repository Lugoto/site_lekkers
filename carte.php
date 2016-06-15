<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/styleCarte.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/icon.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $("select").material_select();
            $(".dropdown-button").dropdown({hover: false});
            $('.parallax').parallax();
        });
    </script>
    <title>La carte</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="http://lekkersfrance.com" class="brand-logo">Lekkers</a>
        <ul id="nav-mobile" class="hide-on-med-and-down">
            <li><a href="qualite.php">La qualité</a></li>
            <li><a href="carte.php">La Carte</a></li>
            <li><a href="event.php">Info/Event</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station" class="white waves-effect waves-light btn red-text darken-4">Je Commande</a></li>
        </ul>
        <ul class="soc right hide-on-med-and-down">
            <li><a class="soc-facebook" href="https://www.facebook.com/Lekkersbagels/?fref=ts"></a></li>
            <li><a class="soc-twitter" href="#"></a></li>
            <li><a class="soc-google" href="#"></a></li>
            <li><a class="soc-instagram" href="#"></a></li>
            <li><a class="soc-pinterest soc-icon-last" href="#"></a></li>
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="qualite.php">La qualité</a></li>
            <li><a href="carte.php">La carte</a></li>
            <li><a href="event.php">Info/Event</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station" class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
        </ul>
    </div>
</nav>

<div class="content">
    <div class="carte_header"><p class="white-text">Menu</p></div>
    <div class="section decorated">
        <div class="row container">
            <div class="bagelMenu">

                <div class="menuComponent bagelContent">

                </div>
                <div class="bagelContentTitle">
                    <h4 class="red-text text-darken-2">Bagels</h4>
                    <div class="menuComponent bagelContent"></div>
                </div>
                <div class="menuComponent bagelContent">

                </div>
            </div>
        </div>
        <div class="row container">
            <div class="bagelMenu">

                <div class="menuComponent bagelContent">

                </div>
                <div class="bagelContentTitle">
                    <h4 class="red-text text-darken-2 hide-on-med-and-down">&nbsp</h4>
                    <div class="menuComponent bagelContent"></div>
                </div>
                <div class="menuComponent bagelContent">

                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/gallery/carteSandwich.jpg"></div>
    </div>
    <div class="section decorated">
        <div class="row container">
            <div class="sandwichMenu">

                <div class="menuComponent sandwichContent">

                </div>
                <div class="sandwichContentTitle">
                    <h4 class="red-text text-darken-2">Sandwichs</h4>
                    <div class="menuComponent sandwichContent"></div>
                </div>
                <div class="menuComponent sandwichContent">

                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/gallery/carteDessert.jpg"></div>
    </div>
    <div class="section decorated">
        <div class="row container">
            <div class="dessertMenu">

                <div class="menuComponent dessertContent">

                </div>
                <div class="dessertContentTitle">
                    <h4 class="red-text text-darken-2">Desserts</h4>
                    <div class="menuComponent dessertContent"></div>
                </div>
                <div class="menuComponent dessertContent">

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>