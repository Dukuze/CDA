<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<form action="trt_enreg_act.php" method="post">
<div class="form-group">
    <label for="exampleFormControlInput1">Numéro de l'activité</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un numéro d'animation non existant" name="noAnim">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Code animation</label>
    <select class='form-control' id='exampleFormControlSelect1' name='codeAnimation'>
      <?php

      try {
        $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
      $reponse = $bdd->query("SELECT * FROM ACTIVITE");
      while ($donnees = $reponse->fetch()) {
        $codeAnim = $donnees['CODEANIM'];
        echo "<option>$codeAnim</option>";
      }

      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Code Etat Activité</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un code" name="codeEtatActivite">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date activité</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un nom d'animation" name="dateActivite">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Heure rdv activité</label>
    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Entrez l'heure de rdv de l'activité" name="heureRdvActivite">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Prix de l'activité</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le prix de l'activité" name="prixAct">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Heure début activité</label>
    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Entrez l'heure de début de l'activté" name="hrDebutAct">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Heure fin activté</label>
    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Entrez l'heure de fin de l'activté" name="hrFinAct">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date annulation de l'activité</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Entrez la date limite d'annulation de l'activité" name="dtAnnulAct">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1"> Nom Responsable</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le nom du responable de l'activité" name="nomResp">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Prénom Responsable</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le prénom du responable de l'activité" name="prenomResp">
  </div>

  <button type="submit" class="btn btn-outline-info">Valider</button>
</form>*

