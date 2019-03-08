<?php
$id =$_POST['id']
$name =$_POST['nom'];
$surname =$_POST['prenom'];
$email =$_POST['email'];

function updateUser($id){
    $connec = new PDO("mysql:dbname=blogDB",'root','0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("UPDATE users SET nom='$name', prenom='$surname', email='$email' WHERE id='$id'");
$request->execute();

}

$update = updateUser($id);

echo json_encode($update);