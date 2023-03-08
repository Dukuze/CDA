INSERT INTO `animation` (`CODEANIM`, `CODETYPEANIM`, `NOMANIM`, `DATECREATIONANIM`, `DATEVALIDITEANIM`, `DUREEANIM`, `LIMITEAGE`, `TARIFANIM`, `NBREPLACEANIM`, `DESCRIPTANIM`, `COMMENTANIM`, `DIFFICULTEANIM`) VALUES
('Rando', 'EXT', 'Randonnée', '2020-06-10', '2020-06-17', 150, 90, '10.00', 15, 'Parcours de randonnée des environs', 'Je recommande pour la visite des environs', 'Facile'),
('Ski', 'SKI', 'Séance de Ski', '2020-12-01', '2020-12-07', 180, 7, '100.00', 20, 'Séance de ski dans la zone indiqué', 'C\'est fun, surtout en famille', 'Moyen'),
('Rep Noël', 'INT', 'Repas de noêl', '2020-12-10', '2020-12-20', 300, NULL, '2.00', 75, 'Repas de noël organisé à l\'occasion des fêtes de noël', 'Venez Nombreux :) !', 'Aucune'),
('Babyfoot', 'INT', 'Tournoi de Babyfoot', '2020-08-04', '2020-08-13', 120, 10, '5.00', 40, 'Tournois de Babyfoot organisé par l\'établissement pour gagner le respect du village vacances', 'Jouer pour le respect :)', 'Avancé')




-- 

<a href='index.php?page=enregistrerAnim' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Crée une animation</a>
<a href='index.php?page=modifAnim' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Modifier une animation</a>
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
  $reponse->closeCursor();
  ?>