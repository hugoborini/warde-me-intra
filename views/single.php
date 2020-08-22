<?php
    $room = recupAllDataById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/warde-me-intra/styles/css/style.css">
</head>

<body class="singlePage">
    <div class="page">
        <div class="page__header">
            <p> Fiche Perso </p>
            <div class="page__folder--solid">
                <div class="page__folder--trans"></div>
            </div>
            
        </div>
        <div class="page__body">
        <?php while($data = $room->fetch()){ ?>
            <div class="page__body-text">
                <p>Nom : <?=$data['name']?></p>
                <p>Prenom : <?=$data['lastname']?></p>
                <p>Age : <?=$data['age']?></p>
                <p>Location : <?=$data['location']?></p>
                <p>Sexe : <?=$data['sexe']?></p>
                <p>Metier : <?=$data['metier']?></p>
                <p>Jouez vous au jeux video ? : <?=$data['is_play']?></p>
                <p>A quelle type de jeux jouez vous ? : <?=$data['play_type']?></p>
                <p>En moyenne, combien d'heures jouez-vous par semaine aux jeux vidéo (mobile inclus) ? : <?=$data['play_time']?></p>
        <?php }?>
            </div>
        </div>
    </div>
</body>
</html>