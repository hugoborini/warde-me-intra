<?php

require "model/model.php";

function recupAllData(){
    $req = selectAll();
    return $req;
}

function recupAllDataById($id){
    $req = selectAllById($id);
    return $req;
};


function checkuser($userNameReq, $userPassReq){
    $username = "admin";
    $pass = "pass";

    if ($userNameReq == $username &&  $userPassReq == $pass ){
        header("Location: /warde-me-intra/table");
        $_SESSION["check"]= true;
        exit;
    } else {
        header("Location: /warde-me-intra?error=1");
        $_SESSION["check"]= false;
        exit;
    }
};

function recupAllDataByType($name, $type){
    $req = selectBynameByType($name, $type);
    return $req;
}