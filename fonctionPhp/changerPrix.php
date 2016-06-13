<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="../favicon.ico"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/styleLogin.css"/>
    <link type="text/css" rel="stylesheet" href="../css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="../css/hover.css" media="all">
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Validation prix</title>


</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 13/06/2016
 * Time: 14:54
 */
include "../fausseBDD/menu.php";

if ($_POST['login'] == 'admin' && sha1($_POST['password']) == "ebfc7910077770c8340f63cd2dca2ac1f120444f" && $_POST["changerPrix"] == "Ok") {
    if (isset($_POST['prix']) && isset($_POST['menuType'])) {

//        var_dump($_POST);
//        var_dump($maDataBase);
        $mynewdatabase = file_get_contents("../fausseBDD/menu.php");
        $mynewdatabase = str_replace(
            "'prix' => '10.6'",
            "'prix' => '" . $_POST['prix'] . "'",
            $mynewdatabase
        );

//        var_dump($mynewdatabase);


        file_put_contents("../fausseBDD/menu.php", $mynewdatabase);
    }
    echo '
        <form action="../login.php" method="post">
            <input type="hidden" name="login" value="'.$_POST['login'].'">
            <input type="hidden" name="password" value="'.$_POST['password'].'">
            <button class="col s4 btn red darken-4" type="submit" name="changerPrix" value="Ok"><i class="material-icons">done</i></button>
        </form>
    ';
//    header("Location: ../login.php");
} else {
    header("Location: ../");
}; ?>
</body>
</html>