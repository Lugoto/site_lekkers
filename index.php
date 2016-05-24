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
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Lekkers</title>
</head>


<body>
<nav>
    <div class="nav-wrapper">
        <a href="http://lekkersfrance.com" class="brand-logo">Lekkers</a>
        <ul id="nav-mobile" class="hide-on-med-and-down">
            <li><a href="qualite.html">La qualité</a></li>
            <li><a href="carte.html">La carte</a></li>
            <li><a href="info.html">Info/Event</a></li>
            <li><a href="info.html">Contact</a></li>
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="qualite.html">La qualité</a></li>
            <li><a href="carte.html">La carte</a></li>
            <li><a href="info.html">Info/Event</a></li>
            <li><a href="info.html">Contact</a></li>
        </ul>
    </div>

    <div class="acceuil">
        <img src="img/acceuil.png" alt=""/>
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
</html>
