<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<p class="font-weight-bold">
  Voici les activités en rapport avec l'animation que vous avez séléctionner
  Sélectionner.
</p>

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Nom de l'activité</th>
      <th scope="col">Date de l'activité</th>
      <th scope="col">Heure RDV activité</th>
      <th scope="col">Prix de l'activité</th>
      <th scope="col">Heure début activité</th>
      <th scope="col">Heure fin activité</th>
      <th scope="col">Date annulation activité</th>
      <th scope="col">Nom Prénom Responsable</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $typeAnim = $_SESSION['choixAnim'];
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query("SELECT *
    FROM ANIMATION AN, ACTIVITE AC
    WHERE AN.CODEANIM = AC.CODEANIM
    AND AN.CODETYPEANIM = '$typeAnim'");
    while ($donnees = $reponse->fetch()) {
      $nomAct = $donnees['NOMANIM'];
      $dtAct = $donnees['DATEACT'];
      $hrRdv = $donnees['HRRDVACT'];
      $prixAct = $donnees['PRIXACT'];
      $hrDebutAct = $donnees['HRDEBUTACT'];
      $hrFinAct = $donnees['HRFINACT'];
      $dtAnulAct = $donnees['DATEANNULEACT'];
      $nomResp = $donnees['NOMRESP'];
      $prenomResp = $donnees['PRENOMRESP'];

      echo "
        <tr>
            <th scope='row'>$nomAct</th>
            <td>$dtAct</td>
            <td>$hrRdv</td>
            <td>$prixAct</td>
            <td>$hrDebutAct</td>
            <td>$hrFinAct</td>
            <td>$dtAnulAct</td>
            <td>$nomResp $prenomResp</td>
        </tr>";
    }
    $reponse->closeCursor();
    ?>
  </tbody>