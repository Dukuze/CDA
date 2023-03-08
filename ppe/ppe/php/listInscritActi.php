
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<p>
    Voici les personnes inscrite à l'activité que vous avez séléctionner !
</p>

<table class="table table-dark" summary border="1">
  <thead>
    <tr>
      <th scope="col">No Compte</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>


    </tr>
  </thead>
  <tbody>
  
  <?php
    $typeAnim = $_SESSION['choixAnim'];
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    $noAct = $_SESSION['noActi'];
    $reponse = $bdd->query("SELECT * FROM INSCRIPTION I, COMPTE C WHERE I.USER = C.USER AND NOACT = '$noAct' ");
    while($donnees = $reponse->fetch())
    {
        $user = $donnees['USER'];
        $nomCompte = $donnees['NOMCOMPTE'];
        $prenomCompte = $donnees['PRENOMCOMPTE'];

        echo"
        <tr>
            <th scope='row'>$user</th>
            <td>$nomCompte</td>
            <td>$prenomCompte</td>
            


        </tr>";
    }
    $reponse->closeCursor();

    $reponse = $bdd->query("SELECT * FROM ACTIVITE I WHERE I.DATEACT = I.DATEACT AND NOACT = '$noAct' ");
    while($donnees = $reponse->fetch())
    {
        $dateact = $donnees['DATEACT'];

        echo"
        <tr>
            <td>$dateact</td>

        </tr>";
    }
    $reponse->closeCursor();
?>
</tbody>
</table>