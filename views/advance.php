<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche avancer</title>
    <link rel="stylesheet" href="styles/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
    if (isset($_POST["name"]) && isset($_POST["type"])){
        $isFetch = false;
        $rawData = recupAllDataByType($_POST["name"], $_POST["type"]);
        $isFetch = true;
    }
?>
        <form action="/warde-me-intra/advance" method="post" novalidate="novalidate">
            <div class="container d-flex mt-4">
                <input type="text" class="form-control search-slt" placeholder="recherche par" name="name">
                <select class="form-control search-slt" id="exampleFormControlSelect1" name="type">
                    <option>option de recherche</option>
                    <option value="name">nom</option>
                    <option value="lastname">prenom</option>
                    <option value='age'>age</option>
                    <option value="location">location</option>
                    <option value='sexe'>sexe</option>
                    <option value="metier">metier</option>
                    <option value='play_type'>type de jeux</option>
                    <option value='play_time'>temp de jeux</option>
                </select>
            
                <input type="submit" class="btn btn-primary wrn-btn" value='search'></button>
            </div>
        </form>

        <?php
        if (isset($isFetch) && $isFetch == true){
            ?>
            <table class="table mt-4">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">age</th>
                    <th scope="col">location</th>
                    <th scope="col">voir plus</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            while ($data = $rawData->fetch()) {
                ?>
                
                <tr>
                <th scope="row"><?= $i?></th>
                <td><?=$data['name']?></td>
                <td><?=$data['lastname']?></td>
                <td><?=$data['age']?></td>
                <td><?=$data['location']?></td>
                <td><a href="/warde-me-intra/responce/<?=$data['id']?>">...</a></td>
            </tr>

            
            <?php
            }
        }
        ?>
        </tbody>
        </table>
</body>
</html>