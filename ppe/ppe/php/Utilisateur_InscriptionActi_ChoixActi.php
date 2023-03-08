<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<div class="form-group">
    <label for="exampleFormControlSelect1">
        Sélectionner l'activité sur laquelle vous voulez vous inscrire
    </label>
    <div class="form-group">
        <form type="GET" action="Utilisateur_trt_Inscription.php">
            <label for="exampleFormControlSelect1">Choissisez une activité</label>
            <select class="" id="exampleFormControlSelect1" name="noAct">
                <option disable selected></option>

                <?php

                $codeAnim = $_SESSION['codeAnim'];
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
                $reponse = $bdd->query("SELECT * FROM ACTIVITE WHERE CODEANIM='$codeAnim'");
                while ($donnees = $reponse->fetch()) {
                    $noAct = $donnees['NOACT'];
                    echo "<option>$noAct</option>";
                }
                $reponse->closeCursor();

                $reponse = $bdd->query("SELECT count(NOINSCRIP) AS limite_inscri FROM INSCRIPTION WHERE USER = '".$_SESSION['USER']."' AND DATEINSCRIP =
                 (SELECT DATEACT FROM ACTIVITE WHERE NOACT = '".$_GET['noAct']."')" );
                $donnees = $reponse->fetch();
                $limite = $data['limite_inscri'];
                if ($limite >= 2) {
                        echo "Nombre limite d'inscription maximum atteinte !";
                        // header('inscrAct.php');

                }
                else {
                    echo"Vous êtes ok ";
                }
                
                ?>

            </select>
            <button type='submit' class='btn btn-outline-primary'>Valider</button>
        </form>
    </div>