<?php require "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Détails du produit pc</h1>
    ID: <?=$_GET["id"] ?><br>
    <?php 
    $id=$_GET["id"];
    $sql="SELECT produit, prix, nombre FROM liste WHERE id=?";
    $ps=$pdo->prepare($sql);
    $ps->bindParam(1,$id,PDO::PARAM_INT);
    $ps->execute();
    while($table=$ps->fetch()){
    echo "produit: " . $table["produit"] . "<br>";
    echo "prix: " . $table["prix"] . "<br>";
    echo "nombre: " . $table["nombre"];

    }
    ?>
    <br>
    <a href="index.php" class="btn btn-warning btn-sm">Retour</a>
    <a href="edit.php?id=<?= $id ?>" class="btn btn-warning btn-sm">Edit</a>
</body>
</html>