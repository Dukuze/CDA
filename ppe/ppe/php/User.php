<!-- Test du fichier importer ppur le projet Vva -->

<?php
require_once('config.php');

function getUser($user, $mdp) {
    $con = mysqli_connect("localhost","root" ,"", "gacti");

    $req =
    "
    SELECT *
    FROM compte
    WHERE USER = '$user'
    AND MDP = '$mdp'
    ";

    $res = mysqli_query($con, $req);

    if($ligne = mysqli_fetch_array($res)) {
        startSession(); 
        $_SESSION['USER'] = $ligne['USER'];
        $_SESSION['NOMCOMPTE'] = $ligne['NOMCOMPTE'];
        $_SESSION['PRENOMCOMPTE'] = $ligne['PRENOMCOMPTE'];
        $_SESSION['DATEINSCRIP'] = $ligne['DATEINSCRIP'];
        $_SESSION['TYPEPROFIL'] = $ligne['TYPEPROFIL'];
        $_SESSION['DATEDEBSEJOUR'] = $ligne['DATEDEBSEJOUR'];
        $_SESSION['DATEFINSEJOUR'] = $ligne['DATEFINSEJOUR'];
        $_SESSION['DATENAISCOMPTE'] = $ligne['DATENAISCOMPTE'];
        $_SESSION['ADRMAILCOMPTE'] = $ligne['ADRMAILCOMPTE'];
        $_SESSION['NOTELCOMPTE'] = $ligne['NOTELCOMPTE'];
        mysqli_close($con);
        return true;
    } else {
        echo "Erreur "; 
    }

    mysqli_close($con);
    return false;
}