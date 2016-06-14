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
    <title>Lekkers</title>
</head>

<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="http://lekkersfrance.com" class="brand-logo">Lekkers</a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <li><a href="#">La qualité</a></li>
                <li><a href="#">La carte</a></li>
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
                <li><a href="qualite.html">La qualité</a></li>
                <li><a href="carte.html">La carte</a></li>
                <li><a href="event.php">Info/Event</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station" class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="no">
    <div class="explication">
        <img src="img/event.jpg" alt=""/>
        <div class="details">
            <h2> Event </h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit vitae purus quis volutpat.
            Nullam eget dictum elit, sed tempus risus. Cras non molestie tellus, vel consequat lacus. Praesent ut sodales nisi.
            Suspendisse potenti. Nulla pellentesque pretium sollicitudin. Aenean sit amet aliquam ante, dignissim luctus magna.
            Nam vitae velit fringilla, porttitor elit sed, sagittis dolor. Morbi interdum suscipit nisi, vel fermentum ante ultrices sed.
            Praesent facilisis ante eu dui pulvinar sollicitudin. Fusce feugiat mattis leo, quis convallis nisi. Fusce porta ullamcorper ultrices.
            Nulla sit amet tellus egestas, accumsan nulla eu, sodales massa. Pellentesque lobortis felis quis massa congue volutpat.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Vivamus molestie eleifend elit sit amet ultricies. Nam ornare ante quis laoreet ornare. Cras quis erat placerat, sagittis tortor ac,
            iaculis neque. Suspendisse viverra tempus ex, et feugiat tellus sollicitudin sed. Suspendisse aliquet semper quam,
            id mollis arcu congue vitae. Suspendisse sed elit ultrices, lacinia eros at, suscipit tellus.
        </div>
    </div>
</div>


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
             data-small-header="false"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="false"
<!--             data-width="1000"-->
        >
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/Lekkersbagels/">
                    <a href="https://www.facebook.com/Lekkersbagels/">Lekkers</a></blockquote>
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
