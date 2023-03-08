<p class="font-weight-bold">Les Animations du Villages Vacances Alpes</p>
<p class="text-monospace">
    Le village accueil de nombreuse animation dans lesquel se regroupe de nombreuse activité. <br> 
    Choissisez un type d'animation et des activités vous serez données en fonction du choix que vous avait fait !
</p>
<div class="form-group">
  <form type="GET" action="consultationActivite.php"> 
    <label for="exampleFormControlSelect1">Choissisez une animation</label>
    <select class="" id="exampleFormControlSelect1" name="nomAnim">
      <option disable selected></option>

    <?php
      try
      {
      $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query("SELECT * FROM ANIMATION");
      while($donnees = $reponse->fetch())
      {
        $nomAnim = $donnees['NOMANIM'];
        echo"<option>$nomAnim</option>";
      }
      $reponse->closeCursor();
    ?>
    </select>
    <button type='submit' class='btn btn-outline-primary'>Valider</button>
  </form>
</div>