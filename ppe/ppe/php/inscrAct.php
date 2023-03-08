<div class="form-group">
    <label for="exampleFormControlSelect1">
        Sélectionner une animation et vous aurez les activités proposés par cette Animations :
    </label>
    <div class="form-group">
        <form type="GET" action="inscrip_act.php">
            <label for="exampleFormControlSelect1">Choissisez une animation</label>
            <select class="" id="exampleFormControlSelect1" name="nomAnim">
                <option disable selected></option>

                <?php
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=gacti;charset=utf8', 'root', '');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
                $reponse = $bdd->query("SELECT * FROM ANIMATION");
                while ($donnees = $reponse->fetch()) {
                    $nomAnim = $donnees['NOMANIM'];
                    echo "<option>$nomAnim</option>";
                }
                $reponse->closeCursor();
                ?>
            </select>
            <button type='submit' class='btn btn-outline-primary'>Valider</button>
        </form>
    </div>


