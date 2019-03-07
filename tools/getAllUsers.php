<?php

function getAllUsers(){
    $connec = new PDO("mysql:dbname=blogDB",'root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM users;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);

}

$users = getAllUsers();

?>