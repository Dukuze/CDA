<?php
session_start(); // Démarrer la session
if (!isset($_SESSION['username'])) {
    header('Location: accueil.php'); // Rediriger l'utilisateur vers la page de connexion
    exit();
}
?> 