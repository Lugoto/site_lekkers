<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/styleLogin.css"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="css/hover.css" media="all">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>lekkersLogin</title>
</head>
<body>

<?php if (empty($_POST['login'])) { ?>
    <div class="nav-wrapper" style="margin-bottom: 10px">
        <div class="white-text" style="font-size: 2em; margin-left: 10px;">Login</div>
    </div>
    <form class="col s12" action="login.php" method="post">
        <div class="row">
            <div class="input-field col s12 ">
                <input placeholder="Login" id="login" type="text" name="login" class="validate">
                <label for="login">Login</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Password" id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class=" col s6">
                <button class="btn red darken-1 waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
    <!--    Code en attendant la BDD -->
<?php } elseif ($_POST['login'] == 'admin' && sha1($_POST['password']) == "ebfc7910077770c8340f63cd2dca2ac1f120444f") { ?>
    <div class="nav-wrapper">
        <div class="white-text" style="font-size: 2em; margin-left: 10px;">BackOffice</div>
    </div>
    <form action="login.php" method="post">
        <div class="col s6" style="margin-top: 5px">
            <button class="btn red darken-2 waves-effect waves-light" type="submit" name="action">Retour à la page login
                <i class="material-icons left">fast_rewind</i>
            </button>
        </div>
    </form>
    <div class="scrollBody">

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">view_module</i>Gestion des images</div>
                <div class="collapsible-body imagesGestion">
                    <?php
                    $images = scandir("img/gallery");
                    foreach ($images as $key => $value) {
                        if ($key > 1) echo '<div class="myImage">
    <img class="materialboxed" src="img/gallery/' . $value . '" alt="' . $value . '" />
    <p>' . getimagesize("img/gallery/" . $value)[0] . ' x ' . getimagesize("img/gallery/" . $value)[1] . '</p>
    </div>';
                    }
                    ?>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">playlist_add</i>Section à ajouter</div>
                <div class="collapsible-body">
                    <p>Rien pour le moment</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">playlist_add</i>Section à ajouter</div>
                <div class="collapsible-body">
                    <p>Rien pour le moment</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">playlist_add</i>Section à ajouter</div>
                <div class="collapsible-body">
                    <p>Rien pour le moment</p>
                </div>
            </li>
        </ul>
    </div>
<?php }
else ?>
</body>
</html>