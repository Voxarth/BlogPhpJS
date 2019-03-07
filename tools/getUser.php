<?php

$id = $_POST['id'];


function getUser($id){
    $connec = new PDO("mysql:dbname=blogDB",'root','0000');
    $connec->setAttribute(PDO::ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM users WHERE id='$id";);
    return $request->fetchAll(PDO::FETCH_ASSSOC);

}


$response = getUser($id);
$user = $response[0];

?>