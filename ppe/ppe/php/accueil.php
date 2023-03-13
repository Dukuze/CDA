
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="../css/accueil.css">
<!-- Carousel File Js -->
<script type="text/javascript" src="../js/style.js"></script>

</head>

<body>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">VVA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
        </li>

<!-- Découpage de la barre de navigation par type de profil -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Activités
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="">Sports nautiques</a> <hr>
            <a class="dropdown-item" href="">Beach volley</a> <hr>
            <a class="dropdown-item" href="">Randonnées, Location de Velo</a> <hr>
            <a class="dropdown-item" href="">Jeux de plage</a> <hr>
            <a class="dropdown-item" href="">Bien être</a> <hr>
            <a class="dropdown-item" href="">Animation nocturnes</a> 


          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Hébergements
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="">Bungalows en bois</a> <hr>
            <a class="dropdown-item" href="">Mobil-homes</a> <hr>
            <a class="dropdown-item" href="">Tentes lodges</a> <hr>
            <a class="dropdown-item" href="">Chambres d'hôtel</a> <hr>
            <a class="dropdown-item" href="">Appartements</a> <hr>
          </div>
        </li>

        <!-- Rajjouter un onglets ressrvation dans la barre de menu ce référent à index.php -->


        <li class="nav-item">
          <a class="nav-link" href="">Contactez-Nous</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Utilisateur
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

  <!-- Code affichant l'état de connexion de l'utilisateur, le rédirigeant
       vers la connexion dans le cas écheant  -->          
          <a class="dropdown-item" href="<?php echo empty($_SESSION) ? 'connexion.php' : 'index.php?index=profil'; ?>">
          <?php echo empty($_SESSION) ? 'Connexion' : 'Profil'; ?>
             <hr>

            <?php
            if(empty($_SESSION))
            {
              echo "Etat :<span style='color:red;'> Déconnecté</span>";
            }
            else{

              echo "<form method=\"get\" action=\"logout.php\"><a class=\"dropdown-item\" href=\"accueil.php\">Deconnexion</a>
              </form>";

              session_destroy(); 

            }
            ?>
            </a>  

          </div>
        </li>
      </ul>
    </div>
  </nav>
  

<!-- Ajout d'un Carousel -->

<div class="container" >
  <div class="text-align">
  <h2 class="text-whitesmoke">Bienvenue à la Station de vacances Gold Resort </h2>
  </div>
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/img/hom.jpg" alt="presentation" width="460" height="345">
        <div class="carousel-caption">
          <h3>Présentation</h3>
          <p>The atmosphere in presentation has a touch of Florence and Venice.</p>
        </div>
      </div>


      <div class="item">
        <img src="/img/heb.jpg" alt="hebergements" width="460" height="345">
        <div class="carousel-caption">
          <h3>Hébergements</h3>
          <p>Beautiful Hébergementss in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="/img/jet.jpg" alt="activites" width="460" height="345">
        <div class="carousel-caption">
          <h3>Activités</h3>
          <p>The atmosphere in presentation has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="/img/aqua.jpg" alt="divertissement" width="460" height="345">
        <div class="carousel-caption">
          <h3>Divertissement</h3>
          <p>Beautiful Hébergementss in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>







<!-- Exemple de présentation de page d'accueil pour un site de village vacance -->
<div class="text-whitesmoke">

		<h1>Gold Resort Vacation</h1>
	</header>

	<main>
		<section>
			<p>Notre station de vacances est située dans un cadre magnifique au cœur de la nature. Nous offrons une variété d'hébergements confortables et une grande variété d'activités pour tous les âges.</p>
		</section>

		<section>

		<section>
			<h2>Contactez-nous</h2>
			<p>Pour plus d'informations, n'hésitez pas à nous contacter :</p>
			<ul>
				<li>Téléphone : 01 23 45 67 89</li>
				<li>Email : info@stationdevacances.com</li>
				<li>Adresse : 123 rue des vacances, 75000 Paris</li>
			</ul>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Station de vacances. Tous droits réservés.</p>
	</footer>
          </div>


</body>

</html>



