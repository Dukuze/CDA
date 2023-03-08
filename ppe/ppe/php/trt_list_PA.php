<?php
    ini_set('display_errors', 'on');
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
    
    $nomAnim = $_GET['nomAnim'];

    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query("SELECT * FROM ANIMATION WHERE NOMANIM='$nomAnim' ");

    $donnees = $reponse->fetch();
    $reponse->closeCursor();
    session_start();
    $_SESSION['choixAnim'] = $donnees['CODEANIM'];
    header('location:listerInscritChoixActi.php');
    ?>
