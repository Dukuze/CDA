<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


<link rel="stylesheet" href="../css/connexion.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body class="main-bg">

<!-- Formulaire de Connexion -->

 <div class="login-container text-c animated flipInX">
  <div>
  <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
  </div>
  <h3 class="text-whitesmoke">VVA</h3>
  <p class="text-whitesmoke">Connexion</p>
  <div class="container-content">
  
  <form class="margin-t" action="login.php" method="post">
   <div class="form-group" id="email">
   <input type="text" name="user" class="form-control" placeholder="Nom d'utilisateur" required="">
   </div>
   <div class="form-group" id="motdepasse">
    <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required="">
   </div>
   <button type="submit" class="form-button button-l margin-b">Se Connecter</button>
   <!-- Formulaire d'inscription à créer et boutton à rajoutet ensuite -->
   <button class="form-button button-l margin-b" onclick="location.href='inscription.php'">S'inscire</button>

   <!-- <button type="submit" class="form-button button-l margin-b">S'inscrire</button> -->
      </form>
  </div>
            </div>
</body>

</html>