<?php

// print_r($_POST);
if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['sujet']) && !empty($_POST['message'])){
    $to = 'vandermee.matthieu@gmail.com';
//  $to = 'lucas.pozzer@ynov.com';
    $sujet = '=?UTF-8?B?' . base64_encode($_POST['sujet']) . '?=';
    $message = base64_encode($_POST['message']);
    $message = wordwrap($message, 70, "\n", true);
    $mail = $_POST['mail'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $headers = 'From: ' . $prenom . ' ' . $nom . ' <' . $mail . '>';
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-Transfer-Encoding: base64' . "\n";
    $headers .= 'Content-Type: text/html; charset="utf-8"' . "\n";

    $m = "Salut";
    // if (mail ( $to , $sujet , $message, $headers))
    // {
    header('Location: contact.php#openModal');
    // }
}else { ?>
<!DOCTYPE HTML>
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


<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="http://lekkersfrance.com" class="brand-logo">Lekkers</a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <li><a href="#">La qualité</a></li>
                <li><a href="#">La carte</a></li>
                <li><a href="#">Info/Event</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station"
                       class="white waves-effect waves-light btn red-text darken-4">Je Commande</a></li>
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
                <li><a href="info.html">Info/Event</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station"
                       class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
            </ul>
        </div>
    </nav>
</div>


</div>

<div class="retour">
    <div class="text">

        Veuillez renseigner tout les champs </br>

    </div>
    <button class="btn waves-effect waves-light red darken-4 btnchercher" id="submitButton" type="submit" name="action"
            value="submit" onclick="history.go(-1)">Retour au formulaire
    </button>

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
<?php
}
?>
