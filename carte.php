<?php
$title = "Menu - Lekkers Bagel Station - Bordeaux, Quai des Chartrons";
$meta_description = "Lekkers Bagel Station de Bordeaux vous propose divers menus dans lesquels vous pourrez choisir entre Bagels, Dwichs et Salades pouvant être préparés sur-mesure !";
$optionsHeader = '
    <link type="text/css" rel="stylesheet" href="css/styleCarte.css"/>
    <script src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $("select").material_select();
            $(\'.parallax\').parallax();
        });
    </script>
';

include_once "_header.php";

?>


<div class="content">
    <div class="parallax-container">
        <div class="parallax">
            <div class="carte_header"><h1 class="white-text">Menu</h1></div>
            <img src="img/gallery/Fond carte.jpg">
        </div>
    </div>
    <div class="section decorated">
        <div class="Menu">
            <img src="img/gallery/menuClassic.png" alt="Menu classic à 7 euros 90">
            <img src="img/gallery/menuExtra.png" alt="Menu Extra à 9 euros 90">
            <img src="img/gallery/menuDelice.png" alt="Menu Delice à 7 euros 90">
            <img src="img/gallery/menuDouble.png" alt="Menu Double à 13 euros 20">
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <div class="carte_Title"><p class="white-text" id="bagels">Bagels</p></div>
            <img src="img/gallery/carteBagelsHeader.jpg">
        </div>
    </div>
    <div class="section decorated bagelMenuManager">
        <div class="bagelMenu">
            <img src="img/gallery/bagOne.png" alt="BagOne saumon à 5 euros 70">
            <img src="img/gallery/bagChicken.png" alt="Bag Chicken à 5 euros 60">
            <img src="img/gallery/BagBacon.png" alt="Bag Bacon à 5 euros 70">
        </div>
        <div class="bagelMenu">
            <img src="img/gallery/BaconExtra.png" alt="Bacon Extra à 5 euros 80">
            <!-- <img src="img/gallery/special.png" alt="Bag Spécial à 6 euros"> -->
            <img src="img/gallery/le68.png" alt="Le 68 steack à 5 euros 90">
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <div class="carte_Title"><p class="white-text" id="salades">Salades</p></div>
            <img src="img/gallery/carteSaladeHeader2.jpg">
        </div>
    </div>
    <div class="section decorated bagelMenuManager">
        <div class="saladMenu">
            <img src="img/gallery/Salade1v4.png" alt="Salade Saumon à 7 euros">
            <img src="img/gallery/Salade2v4.png" alt="Salade Poulet à 7 euros">
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <div class="carte_Title"><p class="white-text" id="dwichs">Toasty</p></div>
            <img src="img/gallery/carteDwichHeader.jpg">
        </div>
    </div>
    <div class="section decorated bagelMenuManager">
        <div class="saladMenu">
            <img src="img/gallery/toastyBacon.png" alt="Toasty Bacon à 6 euros">
            <img src="img/gallery/toastyPoulet.png" alt="Toasty Poulet à 6 euros">
            <img src="img/gallery/toastySpecial.png" alt="Toasty Saumon à 6 euros">
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <div class="carte_Title"><p class="white-text" id="desserts">Desserts</p></div>
            <img src="img/gallery/carteDessertHeader.jpg">
        </div>
    </div>
    <div class="section decorated bagelMenuManager">
        <div class="saladMenu">
            <img src="img/gallery/Coockie.png" alt="Coockie à 2 euros">
            <img src="img/gallery/muffin1.png" alt="Muffin à 2 euros 50">
            <img src="img/gallery/Yaourt.png" alt="Yaourt à 2 euros 50">
        </div>
    </div>
</div>

<?php include_once "_footer.php" ?>
