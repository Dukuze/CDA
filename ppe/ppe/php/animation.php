
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<div class=".col-6 .col-md-4">
<a href='index.php?index=creeanim' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Crée une animation</a>
<a href='modifanim.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Modifier une animation</a>
</div>
<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Code Animation:</th>
      <th scope='col'>Code Type Anim:</th>
      <th scope='col'>Nom Activité:</th>
      <th scope='col'>Date Crétion Anim:</th>
      <th scope='col'>Date Validité Anim</th>
      <th scope='col'>Duree Anim</th>
      <th scope='col'>Limite Age</th>
      <th scope='col'>Tarif Anime</th>
      <th scope='col'>Nbr Place Anime</th>
      <th scope='col'>Description Anim</th>
      <th scope='col'>Commentaire Anim</th>
      <th scope='col'>Difficulte Animation</th>
    </tr>
  </thead>


  <?php

include("config.php");
bddConnect();

mysqli_set_charset(bddConnect(), "utf8");
$req = "SELECT* FROM ANIMATION";
$res = mysqli_query(bddConnect(), $req);

while($donnees = mysqli_fetch_assoc($res))
{
    $codeAnimation = $donnees['CODEANIM'];
    $codeTypeAnim = $donnees['CODETYPEANIM'];
    $nomAnimation = $donnees['NOMANIM'];
    $dateCreationAnimation = $donnees['DATECREATIONANIM'];
    $dateValiditeAnimation = $donnees['DATEVALIDITEANIM'];
    $dureeAnim = $donnees['DUREEANIM'];
    $limiteAge = $donnees['LIMITEAGE'];
    $tarifAnime = $donnees['TARIFANIM'];
    $nbrPlaceAnim = $donnees['NBREPLACEANIM'];
    $descriptAnimation = $donnees['DESCRIPTANIM'];
    $commentAnimation = $donnees['COMMENTANIM'];
    $difficulteAnimation = $donnees['DIFFICULTEANIM'];
    echo "
        <tbody>
          <tr>
            <td>$codeAnimation</td>
            <td>$codeTypeAnim</td>
            <td>$nomAnimation</td>
            <td>$dateCreationAnimation</td>
            <td>$dateValiditeAnimation</td>
            <td>$dureeAnim</td>
            <td>$limiteAge</td>
            <td>$tarifAnime</td>
            <td>$nbrPlaceAnim</td>
            <td>$descriptAnimation</td>
            <td>$commentAnimation</td>
            <td>$difficulteAnimation</td>
          </tr>
          ";
  }
  ?>
