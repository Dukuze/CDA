<?php
// connexion à la base de données
$host = "localhost"; // votre hôte
$user = "root"; // votre nom d'utilisateur
$password = ""; // votre mot de passe
$dbname = "gacti"; // le nom de votre base de données

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Obliger l'inscrit à avoir un type de profil définie.

// traitement du formulaire d'inscription
if (isset($_POST['submit'])) {
  // récupération des données du formulaire
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naissance = $_POST['date_naissance'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $date_debut_sejour = $_POST['date_debut_sejour'];
  $date_fin_sejour = $_POST['date_fin_sejour'];

  // vérification des données saisies
  if (empty($username) || empty($password)) {
    echo "Veuillez remplir tous les champs obligatoires.";
  } else {
    // insertion des données dans la base de données
    $sql = "INSERT INTO COMPTE (USER, MDP, NOMCOMPTE, PRENOMCOMPTE, , DATEINSCRIP, DATENAISCOMPTE, ADRMAILCOMPTE, NOTELCOMPTE, DATEDEBSEJOUR, DATEFINSEJOUR)
            VALUES ('$username', '$password', '$nom', '$prenom', NOW(), '$date_naissance', '$email', '$telephone', '$date_debut_sejour', '$date_fin_sejour')";
    if (mysqli_query($conn, $sql)) {
      echo "Votre compte a été créé avec succès.";
    } else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/connexion.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body class="main-bg">
<!-- Container -->
<div class="login-container text-c animated flipInX">
  <div>
  <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
  </div>
  <h3 class="text-whitesmoke" href="connexion.php">VVA</h3>
  <p class="text-whitesmoke">Inscription</p>
  <div class="container-content">

<!-- formulaire d'inscription  -->
<form class="margin-t"  method="post">

<div class="form-group" > 
  <label class="text-whitesmoke" for="username">Nom d'utilisateur</label>
  <input class="form-control" type="text" name="username" required>
</div>
<div class="form-group"> 
  <label class="text-whitesmoke" for="password">Mot de passe</label>
  <input class="form-control" type="password" name="password">
</div>
<div class="form-group"> 
  <label class="text-whitesmoke" for="nom">Nom</label>
  <input class="form-control" type="text" name="nom">
</div>
<div class="form-group"> 
  <label class="text-whitesmoke" for="prenom">Prénom</label>
  <input class="form-control" type="text" name="prenom">
</div>
<div class="form-group"> 
  <label class="text-whitesmoke" for="date_naissance">Date de naissance</label>
  <input class="form-control" type="date" name="date_naissance">
</div>
<div class="form-group"> 
  <label class="text-whitesmoke" for="email">Adresse e-mail</label>
  <input class="form-control" type="email" name="email" required>
</div>
<div class="form-group">
  <label class="text-whitesmoke" for="telephone">Numéro de téléphone</label>
  <input class="form-control" type="tel" name="telephone">
</div>
  <div class="form-group">
  <label class="text-whitesmoke" for="date_debut_sejour">Date d'arrivée</label>
  <input class="form-control" type="date" name="date_debut_sejour">
</div>
  <div class="form-group">
  <label class="text-whitesmoke" for="date_fin_sejour">Date de départ</label>
  <input class="form-control" type="date" name="date_fin_sejour">
  <br>

  <input type="submit" name="submit" class="form-button button-l margin-b" value="S'inscrire">
  <button class="form-button button-l margin-b" onclick="location.href='connexion.php'">Retour</button>


</form>

</div>
</div>

</body>
</html>