
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<table class="table table-dark" summary border="1">
<tr>
  <th>Pseudo</th>
  <th>Nom</th>
  <th>Prénom</th>
  <th>Date d'inscription</th>
  <th>Type de Profil</th>
  <th>Date du début de séjour</th>
  <th>Date de fin de séjour</th>
  <th>Date de Naissance</th>
  <th>Adresse mail</th>
  <th>Numéro de Téléphone</th>
</tr>
<tr>
  <th><?=$_SESSION['USER']?></th>
  <th><?= $_SESSION['NOMCOMPTE'] ?></th>
  <th><?= $_SESSION['PRENOMCOMPTE'] ?></th>
  <th><?= $_SESSION['DATEINSCRIP']  ?></th>
  <th><?= $_SESSION['TYPEPROFIL'] ?></th>
  <th><?= $_SESSION['DATEDEBSEJOUR'] ?></th>
  <th><?= $_SESSION['DATEFINSEJOUR'] ?></th>
  <th><?= $_SESSION['DATENAISCOMPTE']  ?></th>
  <th><?= $_SESSION['ADRMAILCOMPTE']  ?></th>
  <th><?= $_SESSION['NOTELCOMPTE']  ?></th>
</tr>


