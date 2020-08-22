<?php
    $room = recupAllDataById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

<?php while($data = $room->fetch()){ ?>
    <p>hugo : <?=$data['name']?></p>
    <p>prenom : <?=$data['lastname']?></p>
    <p>age : <?=$data['age']?></p>
    <p>location : <?=$data['location']?></p>
    <p>sexe : <?=$data['sexe']?></p>
    <p>metier : <?=$data['metier']?></p>
    <p>Jouez vous au jeux video ? : <?=$data['is_play']?></p>
    <p>A quelle type de jeux jouez vous ? : <?=$data['play_type']?></p>
    <p>En moyenne, combien d'heures jouez-vous par semaine aux jeux vidéo (mobile inclus) ? : <?=$data['play_time']?></p>
<?php }?>
</body>
</html>