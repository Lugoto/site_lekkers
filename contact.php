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
        <li><a href="info.html">Info/Event</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="http://www.takeeateasy.fr/fr/livraison-bordeaux/restaurant/lekkers-bagels-station" class="white-text waves-effect waves-light btn red darken-4">Je Commande</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="conteneur">
<body>

    <div class="info">
      <div class="horraire">

        <table>
          <h2>Horraires</h2>
          <tbody>
            <tr>
              <td scope="row">Lundi</td>
              <td data-label="Due Date">10H30 - 14H30</td>
            </tr>
            <tr>
              <td scope="row">Mardi</td>
              <td data-label="Due Date">10H30 - 14H30</td>
            </tr>
            <tr>
              <td scope="row">Mercredi</td>
              <td data-label="Due Date">10:30 - 14:30</br></br>18:30 - 21:30</td>
            </tr>
            <tr>
              <td scope="row">Jeudi</td>
              <td data-label="Due Date">10:30 - 14:30</br></br>18:30 - 21:30</td>
            </tr>
            <tr>
              <td scope="row">Vendredi</td>
              <td data-label="Due Date">10:30 - 14:30</br></br>18:30 - 21:30</td>
            </tr>
            <tr>
              <td scope="row">Samedi</td>
              <td data-label="Due Date">Fermé</td>
            </tr>
            <tr>
              <td scope="row">Dimanche</td>
              <td data-label="Due Date">10:00 - 16:00</td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="informations">
        <h2>Informations</h2>
        <div class="ligne-info"><div class="rouge">Mobile: </div>06 29 36 67 98</div>
        <div class="ligne-info"><div class="rouge">Adresse: </div>68 Quai des Chartrons, 33000 Bordeaux</div>
      </div>
    </div>


    <div class="contact">
      <div class="formulaire">
        <div class="row">
          <form action="php/mail.php" method="post" class="col s12">
            <div class="row">
              <h2>Contact</h2>
              <div class="input-field col s6 marge2">
                <input name="prenom" id="prenom" type="text" class="validate text-blue text-darken-2">
                <label for="prenom">Votre prenom</label>
              </div>
              <div class="input-field col s6 marge2">
                <input name="nom" id="nom" type="text" class="validate text-blue text-darken-2">
                <label for="nom">Votre nom</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 marge2">
                <input name="mail" id="email" type="email" class="validate text-blue text-darken-2">
                <label for="email">Votre mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 marge2">
                <input name="sujet" id="sujet" type="text" class="validate">
                <label for="sujet">Sujet</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 marge2">
                <textarea name="message" id="message" class="materialize-textarea validate" type="text"></textarea>
                <label for="textarea1">Message</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light red darken-4 btnchercher" id="submitButton" type="submit" name="action" value="submit">Envoyer</button>
          </form>
        </div>
      </div>
    </div>

  <iframe style="border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Lekkers+Bagels+Station,+Quai+des+Chartrons,+Bordeaux,+France&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>


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
