<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<div class="form-group">
  <label for="exampleFormControlSelect1">
    Sélectionner une animation pour accéder au plan des activités pour pouvoir visualiser les activités afin d'en voir les les inscrits
  </label>
  <div class="form-group">
    <form type="GET" action="trt_list_PA.php">
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