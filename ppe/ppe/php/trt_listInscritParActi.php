<?php
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
    $noActi = $_GET['noActi'];
    session_start();
    $_SESSION['noActi'] = $noActi;
    header('location:listInscritActi.php');
?>