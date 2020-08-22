<?php
function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=ward-me-form;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}

function selectAll(){
    $bdd = dbConnect();

    $req = $bdd->query("SELECT * from responce");

    return $req;
}


function selectAllById($id){
    $bdd = dbConnect();

    $req = $bdd->prepare("SELECT * from responce WHERE id = :id");
    $req->execute([
        "id" => $id
    ]);
    return $req;
}

function selectBynameByType($name, $type){

    $bdd = dbConnect();
    $req = $bdd->prepare("SELECT * from responce WHERE $type = :names ");
    $req->execute([
        "names" => $name,
    ]);
    return $req;
}