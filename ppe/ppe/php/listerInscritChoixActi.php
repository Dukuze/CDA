<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<p class="font-weight-bold">
  Voici les activités en rapport avec l'animation que vous avez séléctionner </br>
  Sélectionner l'activité sur laquelle vous souhaiter voir les personnes inscrits !
</p>

<div class="form-group">
  <form type="GET" action="trt_listInscritParActi.php">
    <label for="exampleFormControlSelect1">Choissisez le numéro de l'activité pour voir toute les personnes inscrites à cette Animation :</label>
    <select class="" id="exampleFormControlSelect1" name="noActi">
      <option disable selected></option>

      <?php
      try {
        $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
      $choixAnim = $_SESSION['choixAnim'];
      $reponse = $bdd->query("SELECT * FROM ACTIVITE WHERE CODEANIM = '$choixAnim'");
      while ($donnees = $reponse->fetch()) {
        $noAct = $donnees['NOACT'];

        echo "<option>$noAct</option>";
      }
      $reponse->closeCursor();
      ?>
    </select>
    <button type='submit' class='btn btn-outline-primary'>Valider</button>
  </form>