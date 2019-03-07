<?php

/* Definition des données 
   ====================== */
   
$name =$_POST['nom'];
$surname =$_POST['prenom'];
$email =$_POST['email'];

/* Envoie à la base de données
   =========================== */

   $connec = new PDO("mysql:dbname=blogDB",'root','0000');
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $request = $connec->prepare("INSERT INTO users (nom, prenom, email) VALUES ('$name','$surname','$email')");
    $request->execute();