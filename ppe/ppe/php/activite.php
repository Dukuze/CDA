<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<a href='enreg_act.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Crée une activité</a>
<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>N° Activité:</th>
      <th scope='col'>Code Animation:</th>
      <th scope='col'>Code Etat Activité:</th>
      <th scope='col'>Date Activité:</th>
      <th scope='col'>Heure Rdv Activité</th>
      <th scope='col'>Prix Activité</th>
      <th scope='col'>Heure Début Act</th>
      <th scope='col'>Heure Fin Act</th>
      <th scope='col'>Date Anul Act</th>
      <th scope='col'>Responsable</th>
    </tr>
  </thead>

  <?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $reponse = $bdd->query("SELECT * FROM ACTIVITE");
  while ($ligne = $reponse->fetch()) {
    $noAct = $ligne['NOACT'];
    $codeAnim = $ligne['CODEANIM'];
    $codeEtatAct = $ligne['CODEETATACT'];
    $dateAct = $ligne['DATEACT'];
    $hrRdvAct = $ligne['HRRDVACT'];
    $hrDebutAct = $ligne['HRDEBUTACT'];
    $hrFinAct = $ligne['HRFINACT'];
    $dateAnulAct = $ligne['DATEANNULEACT'];
    $prenomResp = $ligne['PRENOMRESP'];
    $nomResp = $ligne['NOMRESP'];
    $tarifAct = $ligne['PRIXACT'];

    echo "
        <tbody>
          <tr>
            <td>$noAct</td>
            <td>$codeAnim</td>
            <td>$codeEtatAct</td>
            <td>$dateAct</td>
            <td>$hrRdvAct</td>
            <td>$tarifAct</td>
            <td>$hrDebutAct</td>
            <td>$hrFinAct</td>
            <td>$dateAnulAct</td>
            <td>$prenomResp $nomResp</td>
          </tr>
          ";
  }
  $reponse->closeCursor();
  ?>
