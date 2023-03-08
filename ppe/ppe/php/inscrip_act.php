<?php
$nomAnim = $_GET['nomAnim'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
    $reponse = $bdd->query("SELECT * FROM ANIMATION WHERE NOMANIM = '$nomAnim' ");
    $donnees = $reponse->fetch();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
session_start();
$_SESSION['codeAnim'] = $donnees['CODEANIM'];
$reponse->closeCursor();
header('location:Utilisateur_InscriptionActi_ChoixActi.php');
?>
