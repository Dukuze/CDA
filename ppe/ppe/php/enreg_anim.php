<?php
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
  ini_set('display_errors', 'on');

  $cdAnimation = $_POST['codeAnim'];
  $cdTypeAnimation = $_POST['codeTypeAnimation'];
  $nomAnimation = $_POST['nomAnimation'];
  $dtCreationAnimation = date("y.m.d");
  $dtValiditeAnimation = $_POST['dateValiditeAnimation'];
  $dureeAnimation = $_POST['dureeAnim'];
  $limiteDAge = $_POST['limiteAge'];
  $tarifAnimation = $_POST['tarifAnimation'];
  $nbrPlaceAnimation = $_POST['nbrPlace'];
  $descriptionAnimation = $_POST['descriptionAnim'];
  $commentaireAnimation = $_POST['commentAnimation'];
  $difficulteAnimation = $_POST['difficulteAnimation'];
  try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO ANIMATION(CODEANIM,CODETYPEANIM,NOMANIM,DATECREATIONANIM,DATEVALIDITEANIM,DUREEANIM,LIMITEAGE,TARIFANIM,NBREPLACEANIM,DESCRIPTANIM,COMMENTANIM,DIFFICULTEANIM)
              VALUES('$cdAnimation', '$cdTypeAnimation', '$nomAnimation', '$dtCreationAnimation', '$dtValiditeAnimation', '$dureeAnimation', '$limiteDAge', '$tarifAnimation', '$nbrPlaceAnimation', '$descriptionAnimation', '$commentaireAnimation', '$difficulteAnimation')";
      $bdd->exec($sql);
      header('location:index.php');
    }
    catch(Exception $e)
    {
      ?>
      <script>
        alert("Il y a eu un problème lors de l'enregistrement de la requête veuillez réesayer");
      </script>
      <?php
      die('Erreur : '.$e->getMessage());
    }
    $reponse->closeCursor();

?>