<?php  
$title = "Contact - Lekkers Bagel Station - Bordeaux, Quai des Chartrons";
$meta_description = "Ici vous pourrez avoir un complément d'informations sur le restaurant Lekkers bagel station ainsi qu'un formulaire de contacte pour nous adresser un message.";
$optionsHeader = "";

include_once "_header.php";
?>

<div class="conteneur">
  <div class="info">
    <div class="horraire">

      <table>
        <h2>Horaires</h2>
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
<div class="ligne-info"><div class="rouge">Mobile: </div>05 56 79 31 58</div>
<div class="ligne-info"><div class="rouge">Adresse: </div>68 Quai des Chartrons, 33000 Bordeaux</div>
    </div>
  </div>


  <div class="contact">
    <div class="formulaire">
      <div class="row">
        <form action="mail.php" method="post" class="col s12">
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
</div>
<iframe style="border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Lekkers+Bagels+Station,+Quai+des+Chartrons,+Bordeaux,+France&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>

<div id="openModal" class="modalDialog">
  <div>
  <a href="#close" title="Close" class="close">X</a>
  <div class="envoie">L'email s'est bien envoyé.</div>
</div>
</div>

<?php include_once "_footer.php" ?>