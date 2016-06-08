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
    <nav>
        <div class="nav-wrapper">
            <a href="http://lekkersfrance.com" class="brand-logo">Login</a>
        </div>
    </nav>


    <!-- Formulaire -->
    <div class="formulaire">
        <form class="col s12" action="login.php" method="post">
            <div class="row">
                <div class="input-field col s12 ">
                    <input id="login" type="text" name="login" class="validate">
                    <label for="login">Login</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class=" col s6">
                    <button class="btn red darken-1 waves-effect waves-light" type="submit" name="action">Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!--    Code en attendant la BDD -->
<?php } elseif ($_POST['login'] == 'admin' && sha1($_POST['password']) == "ebfc7910077770c8340f63cd2dca2ac1f120444f") { ?>

    <?php

    if (isset($_FILES) && !empty($_FILES)) {
        $files = $_FILES['files'];
        $images = array();
        for ($i = 0; $i < count($files['name']); $i++) {
            array_push($images, array('name' => $files['name'][$i], 'type' => $files['type'][$i], 'tmp_name' => $files['tmp_name'][$i], 'error' => $files['error'][$i], 'size' => $files['size'][$i]));
        }
        foreach ($images as $image) {
            $image['type'] == 'image/jpeg' || $image['type'] == 'image/jpg' || $image['type'] == 'image/gif' || $image['type'] == 'image/png' ? move_uploaded_file($image['tmp_name'], './img/gallery/' . $image['name']) : null;
        }
    }

    if (isset($_POST['deleteImages']) && $_POST['deleteImages'] == 'deleteImages') {
        $images = scandir('img/gallery/');
        $exist = false;

        for ($i = 0; $i < count($images); $i++) {
            if ($images[$i] == $_POST['imageNameToDelete']) $exist = true;
        }
        if ($exist) unlink('img/gallery/' . $_POST['imageNameToDelete']);
    }


    ?>
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

        <ul>
            <li id="gestionMenus">
                <div class="collapsible-header"><i class="material-icons">view_quilt</i>Gestion de la carte</div>
                <div>
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s3"><a class="active" href="#menu">Menu</a></li>
                                <li class="tab col s3"><a href="#bagels">Bagels</a></li>
                                <li class="tab col s3"><a href="#dessert">Dessert</a></li>
                                <li class="tab col s3"><a href="#boisson">Boisson</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="col s12 coll-body">
                            <ul>
                                <li>
                                    <div class="content">
                                        <img src="img/gallery/menuClassic.png" alt="">
                                        <p class="circle">7,60 €</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <img src="img/gallery/menuExtra.png" alt="">
                                        <p class="circle">8,70 €</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <img src="img/gallery/menuDouble.png" alt="">
                                        <p class="circle">13,20 €</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="bagels" class="col s12 coll-body">Bagels</div>
                        <div id="dessert" class="col s12 coll-body">Dessert</div>
                        <div id="boisson" class="col s12 coll-body">Boisson</div>

                    </div>
                </div>
            </li>
            <li id="gestionImages">
                <div class="active collapsible-header"><i class="material-icons">view_module</i>Gestion des images</div>
                <div class="coll-body">
                    <form action="./login.php" class="col s6" style="/*margin-top: 5px*/" method="post" enctype="multipart/form-data">
                        <div class="file-field input-field">
                            <div class="btn red darken-2 waves-effect waves-light">
                                <span>Image</span>
                                <input type="file" name="files[]" accept=".jpeg, .jpg, .gif, .png" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="ImagesName[]" type="text" placeholder="Upload one or more images">
                            </div>
                        </div>
                        <input type="hidden" name="login" value="<?php echo $_POST['login'] ?>">
                        <input type="hidden" name="password" value="<?php echo $_POST['password'] ?>">
                        <button class="btn red darken-2 waves-effect waves-light" type="submit" name="addImages" value="addImages">Ajouter des images
                            <i class="material-icons right">library_add</i>
                        </button>
                    </form>
                    <div class="imagesGestion">

                        <?php
                        $images = scandir("img/gallery");
                        foreach ($images as $key => $value) {
                            if ($key > 1) echo '<div class="myImage">
                  <img class="materialboxed" src="img/gallery/' . $value . '" alt="' . $value . '" />
                  <p>' . getimagesize("img/gallery/" . $value)[0] . ' x ' . getimagesize("img/gallery/" . $value)[1] . '</p>
                  <form action="login.php" method="post">
                  <input type="hidden" name="login" value="' . $_POST["login"] . '">
                  <input type="hidden" name="password" value="' . $_POST["password"] . '">
                  <input type="hidden" name="imageNameToDelete" value="' . $value . '">
                  <button id="delete" class="btn waves-effect waves-light" type="submit" name="deleteImages" value="deleteImages">
                  <i  class="red-text darken-5 material-icons">delete</i>
                  </button>
                  </form>
                  </div>';
                        }
                        ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">playlist_add</i>Section à ajouter</div>
                <div class="coll-body">
                    <div>Rien pour le moment</div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">playlist_add</i>Section à ajouter</div>
                <div class="coll-body">
                    <div>Rien pour le moment</div>
                </div>
            </li>
        </ul>
    </div>
<?php }
else ?>
</body>
</html>
