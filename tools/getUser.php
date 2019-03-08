<?php

$id = $_POST['id'];


function getUser($id){
    $connec = new PDO("mysql:dbname=blogDB",'root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM users WHERE id=$id;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);

}


$response = getUser($id);
$user = $response[0];


echo json_encode($user);
?>