<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<div class="form-group">
  <label for="exampleFormControlSelect1">
    Sélectionner une animation pour accéder au plan des activités pour pouvoir annuler une activité
  </label>
  <div class="form-group">
    <form type="GET" action="trt_choixAnulActi.php">
      <label for="exampleFormControlSelect1">Choissisez une animation</label>
      <select class="" id="exampleFormControlSelect1" name="nomAnim">
        <option disable selected></option>

        <?php
        try {
          $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
        } catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query("SELECT * FROM ANIMATION");
        while ($donnees = $reponse->fetch()) {
          $nomAnim = $donnees['NOMANIM'];
          echo "<option>$nomAnim</option>";
        }
        $reponse->closeCursor();
        ?>
      </select>
      <button type='submit' class='btn btn-outline-primary'>Valider</button>
    </form>
  </div>
  <table class='table'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>Code Animation:</th>
        <th scope='col'>Code Type Anim:</th>
        <th scope='col'>Nom Activité:</th>
    </thead>


    <?php

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query("SELECT * FROM ANIMATION");
    while ($donnees = $reponse->fetch()) {
      $codeAnimation = $donnees['CODEANIM'];
      $codeTypeAnim = $donnees['CODETYPEANIM'];
      $nomAnimation = $donnees['NOMANIM'];
      echo "
        <tbody>
          <tr>
            <td>$codeAnimation</td>
            <td>$codeTypeAnim</td>
            <td>$nomAnimation</td>
          </tr>
          ";
    }
    $reponse->closeCursor();
    ?>