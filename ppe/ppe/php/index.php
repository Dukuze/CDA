<?php
session_start();
if(empty($_SESSION))
{
  echo "error";
  header('Location: connexion.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Background -->
  <style type="text/css">
body{
background:url('/img//alpes1.jpg');
background-size: cover;
background-attachment: fixed;
background-position: 0% 0%;
}
</style>

</head>
<body>

<!-- Background -->


<!-- Barre de Navigation -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">VVA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item active">
          <a class="nav-link" href="accueil.php?accueil=accueil">Accueil <span class="sr-only">(current)</span></a>
        </li>

<!-- Découpage de la barre de navigation par type de profil -->


<?php

if (isset($_SESSION['TYPEPROFIL']) && $_SESSION['TYPEPROFIL'] === 'EN') {
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
    echo 'Encadrent';
    echo '</a>';
    echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
    echo '<a class="dropdown-item" href="animation.php">Consulter et Enregistrer une Animation</a>';
    echo '<a class="dropdown-item" href="activite.php">Consulter et Enregistrer une Activité</a>';
    echo '<a class="dropdown-item" href="annuler_act.php">Annuler une Activité</a>';
    echo '</div>';
    echo '</li>';
}
?>


        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vacancier
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php?index=consuAct">Consultation des activités</a>
            <a class="dropdown-item" href="index.php?index=inscrAct">Inscription aux activités</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="participant.php">Participants</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Utilisateur
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="
          <?php echo empty($_SESSION) ? 'connexion.php' : 'index.php?index=profil'; ?>">
          <?php echo empty($_SESSION) ? 'Connexion' : 'Profil'; ?>
            <?php
            if(empty($_SESSION))
            {
              echo "Vous êtes deconnecte";
            }
            else{

              echo "<form method=\"get\" action=\"logout.php\"><a class=\"dropdown-item\" href=\"accueil.php\">Deconnexion</a>
              </form>";

            }
            ?>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <?php
  if(!empty($_GET['index']))
  {


    switch ($_GET['index']) {
      case 'index':
      include("index.php");
      break;
      case 'animation':
      include("animation.php");

      break;

      case 'creeanim':
      include("creeanim.php");
      break;

      case 'modifanim':
      include("modifanim.php");
      break;

      case 'profil':
      include("profil.php");
      break;

      case 'activite':
      include("activite.php");
      break;

      case 'participant':
      include("participant.php");
      break;

      case 'creeact':
      include("creeact.php");
      break;

      case 'modifact':
      include("modifact.php");
      break;

     case 'consuAct':
      include("consuAct.php");
      break;

      case 'inscrAct':
      include("inscrAct.php");
      break;
     }
    }

  ?>

</body>
</html>