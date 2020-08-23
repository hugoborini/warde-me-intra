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

function checkUser($pseudo, $mdp){
    $bdd = dbConnect();
    $member = $bdd->prepare("SELECT * FROM member WHERE pseudo = :pseudo");
    $member->execute([
        'pseudo' => $pseudo,
    ]);

    
    $member_data = $member->fetch();
    if (!$member_data){
        return false;
    }
    if (!$member_data){
        return false;
    }
    // $ispasscorrect = password_verify($pass, $member_data['pass']);
    if ($member_data["pseudo"] == $pseudo && $member_data['mdp'] == $mdp) {
        return true;
    }else{
        return false;
    }
}