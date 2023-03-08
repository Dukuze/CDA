<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include('index.php');
?>
<div class="form-group">
    <form type="POST" action="trt_modif_ani.php">
        <label for="exampleFormControlSelect1">Choissisez le numéro de l'activité que vous souhaitez modifier :</label>
        <select class="" id="exampleFormControlSelect1" name="noActi">
            <option disable selected></option>

            <?php
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            $reponse = $bdd->query("SELECT * FROM ANIMATION");
            while ($donnees = $reponse->fetch()) {
                $cdAnim = $donnees['CODEANIM'];
                $nomAnimation = $donnees['NOMANIM'];

                echo "<option>$cdAnim</option>";
            }
            $reponse->closeCursor();
            ?>
        </select>
        <button type='submit' class='btn btn-outline-primary'>Valider</button>
    </form>


    <table class='table'>
        <thead class='thead-dark'>
            <tr>
                <th scope='col'>Code Animation:</th>
                <th scope='col'>Code Type Anim:</th>
                <th scope='col'>Nom Activité:</th>
                <th scope='col'>Date Crétion Anim:</th>
                <th scope='col'>Date Validité Anim</th>
                <th scope='col'>Duree Anim</th>
                <th scope='col'>Limite Age</th>
                <th scope='col'>Tarif Anime</th>
                <th scope='col'>Nbr Place Anime</th>
                <th scope='col'>Description Anim</th>
                <th scope='col'>Commentaire Anim</th>
                <th scope='col'>Difficulte Animation</th>
            </tr>
        </thead>


        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query("SELECT * FROM ANIMATION");
        while ($donnees = $reponse->fetch()) {
            $codeAnimation = $donnees['CODEANIM'];
            $codeTypeAnim = $donnees['CODETYPEANIM'];
            $nomAnimation = $donnees['NOMANIM'];
            $dateCreationAnimation = $donnees['DATECREATIONANIM'];
            $dateValiditeAnimation = $donnees['DATEVALIDITEANIM'];
            $dureeAnim = $donnees['DUREEANIM'];
            $limiteAge = $donnees['LIMITEAGE'];
            $tarifAnime = $donnees['TARIFANIM'];
            $nbrPlaceAnim = $donnees['NBREPLACEANIM'];
            $descriptAnimation = $donnees['DESCRIPTANIM'];
            $commentAnimation = $donnees['COMMENTANIM'];
            $difficulteAnimation = $donnees['DIFFICULTEANIM'];
            echo "
        <tbody>
          <tr>
            <td>$codeAnimation</td>
            <td>$codeTypeAnim</td>
            <td>$nomAnimation</td>
            <td>$dateCreationAnimation</td>
            <td>$dateValiditeAnimation</td>
            <td>$dureeAnim</td>
            <td>$limiteAge</td>
            <td>$tarifAnime</td>
            <td>$nbrPlaceAnim</td>
            <td>$descriptAnimation</td>
            <td>$commentAnimation</td>
            <td>$difficulteAnimation</td>
          </tr>
          ";
        }
        ?>
    </table>