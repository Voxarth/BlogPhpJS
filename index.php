<?php
include_once('./tools/getAllUsers.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion d'utilisateurs</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="tools/user_AJAX.js"></script>
</head>
<body>
    <section id="form">
        <input type="hidden" id="user_id">
        NOM:<input type="text" name="nom" id="name"><br>
        PRENOM:<input type="text" name="prenom" id="surname"><br>
        EMAIL:<input type="text" name="email" id="email"><br>
        <input onclick="add()" type="button" value="add">
        
    </section>
<section>
    <h2>Liste des utilisateurs:</h2>

<div  id="<?= $user->id ?>">

<?php foreach ($users as $key => $user): ?>
<div>
    
    <i class="fas fa-user"></i> 
    <?= $user['nom']?>  <?= $user['prenom']?></div>
    <input onclick="look(<?= $user['id']?>)" type="button" value="Look">
    <input onclick="up(<?= $user['id']?>)" type="button" value="Update">
    <input onclick="del(<?= $user['id']?>)" type="button" value="Delete"> 


</div>
<?php endforeach ?>

</section>

</body>
</html>