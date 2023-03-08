<?php
session_start();
include("config.php");
mysqli_set_charset(bddConnect(), "utf8");
$user = $_POST['user'];
$mdp = $_POST['mdp'];

$req = "SELECT* FROM COMPTE WHERE USER = '$user' AND MDP = '$mdp'";
$res = mysqli_query(bddConnect(), $req);

if($ligne = mysqli_fetch_assoc($res))
{
        $_SESSION['USER'] = $ligne['USER'];
		$_SESSION['MDP'] = $ligne['MDP'];
		$_SESSION['NOMCOMPTE'] =$ligne['NOMCOMPTE'];
		$_SESSION['PRENOMCOMPTE'] = $ligne['PRENOMCOMPTE'];
		$_SESSION['DATEINSCRIP'] = $ligne['DATEINSCRIP'];
		$_SESSION['ADRESSEMAIL'] = $ligne['ADRESSEMAIL'];
		$_SESSION['NOTELCOMPTE'] = $ligne['NOTELCOMPTE'];
		$_SESSION['TYPEPROFIL'] = $ligne['TYPEPROFIL'];
		$_SESSION['DATEDEBSEJOUR'] = $ligne['DATEDEBSEJOUR'];
		$_SESSION['DATEFINSEJOUR'] = $ligne['DATEFINSEJOUR'];
		$_SESSION['DATENAISCOMPTE'] = $ligne['DATENAISCOMPTE'];
		$_SESSION['ADRMAILCOMPTE'] = $ligne['ADRMAILCOMPTE'];


		header("Location: index.php?index=accueil");
		mysqli_close();

}
else
	echo "Erreur de connexion Nom d'utilisateur ou Mot de Passe Incorrect";
header('Refresh:8 ; connexion.php?connexion=connexion');
?>