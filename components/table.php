<table class="table">
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
        $req = recupAllData();
        $i = 1;
        while ($data = $req->fetch()){
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
        $i++;
        }
        ?>

  </tbody>
</table>