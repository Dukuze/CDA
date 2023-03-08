<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
ini_set('display_errors', 'on');

$noAnimation = $_POST['noAnim'];
$cdAnimation = $_POST['codeAnimation'];
$cdEtatAct = $_POST['codeEtatActivite'];
$dtAct = $_POST['dateActivite'];
$hrRdvAct = $_POST['heureRdvActivite'];
$pxAct = $_POST['prixAct'];
$hrBtAct = $_POST['hrDebutAct'];
$hrFnAct = $_POST['hrFinAct'];
$dtAnnAct = $_POST['dtAnnulAct'];
$nmResp = $_POST['nomResp'];
$prnmResp = $_POST['prenomResp'];

//  Connexion a la Bdd
$bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO ACTIVITE
              VALUES('$noAnimation', '$cdAnimation', '$cdEtatAct', '$dtAct', '$hrRdvAct', '$pxAct', '$hrBtAct', '$hrFnAct', '$dtAnnAct', '$nmResp', '$prnmResp')";
$bdd->exec($sql);
$reponse->closeCursor();
echo "L'activité à bel est bien était enregistrer";
header('location:index.php');
?>