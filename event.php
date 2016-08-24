<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" href="favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/icon.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Info/Event</title>
</head>

<body>

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
                <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station"
                       class="white waves-effect waves-light btn red-text darken-4">Je Commande</a></li>
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
                <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station"
                       class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="no eventBody">
    <div class="row">

        <div class="row col s12 l6">
            <div class="imgDiv col s12">
                <img class="" src="img/gallery/event.jpg" alt=""/>
            </div>


            <div class="desdiv col s12">
                <h2> Description </h2>
                <p>Lekkers vous accueil dans un espace de convivialité pour vos soirées privés. Pour votre comité
                    d’entreprise, pot de départ, anniversaire ou soirée à thème, nous proposons de composer avec vous
                    une
                    carte personnalisée. Vous pouvez également commander nos bagles pour vos rendez-vous, réunion,
                    comité
                    d’entreprise ou événements.
                    Nous organisons nous mêmes plusieurs afterwork pendant l’année ainsi que des expositions au sein de
                    notre établissement. Pour se tenir au courant des ces événements nous vous proposons de suivre notre
                    page Facebook Lekkersbagels.</p>
            </div>
        </div>

        <div class="row col s12 l6">


            <div class="facebookTimeline ">

                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>


                <div class="valign-wrapper">
                    <div class="   fb-page"
                         data-href="https://www.facebook.com/Lekkersbagels/"
                         data-tabs="timeline"
                         data-small-header="true"
                         data-adapt-container-width="true"
                         data-hide-cover="false"
                         data-show-facepile="false"
                         data-width="1000"
                         data-height="700"
                    >
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/Lekkersbagels/">
                                <a href="https://www.facebook.com/Lekkersbagels/">Lekkers</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
</body>
</div>
</html>
