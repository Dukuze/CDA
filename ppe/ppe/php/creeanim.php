<?php

include("config.php");
bddConnect();

?>

<div class="col-md-8">

<form class="insertanim" action="enreg_anim.php" method="post">
<div class="form-group">
    <label for="exampleFormControlInput1">Code Animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un code animation non existant" name="codeAnim">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Code type animation</label>
    <select class='form-control' id='exampleFormControlSelect1' name='codeTypeAnimation'>
      <?php
      try {
        $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
      $reponse = $bdd->query("SELECT * FROM TYPE_ANIM");
      while ($donnees = $reponse->fetch()) {
        $codeTypeAnimation = $donnees['CODETYPEANIM'];
        $nomTypeAnimation = $donnees['NOMTYPEANIM'];
        echo "<option>$codeTypeAnimation</option> $nomTypeAnimation";
      }
      $reponse->closeCursor();

      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nom animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un nom d'animation" name="nomAnimation">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date validité de l'animation</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Entrez la date de validité de l'animation" name="dateValiditeAnimation">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Durée de l'animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez la durée de l'animation" name="dureeAnim">
  </div>


  <label>Limite age</label>
  <select class="form-control" name="LIMITEAGE" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="2">6 ans</option>
    <option value="3">12 ans</option>
    <option value="6">16 ans</option>

  </select>


  <div class="form-group">
    <label for="exampleFormControlInput1">Tarif de l'animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le tarif de l'animation" name="tarifAnimation">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de place pour l'animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez le nombre de place pour l'animation" name="nbrPlace">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description de l'animation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descriptionAnim"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Commentaire Animation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentAnimation"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Difficulté de l'animation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrez la difficulté de l'animation" name="difficulteAnimation">
  </div>

  <input type="submit" value="Valider">

</form>
</div>