<?php 
session_start();
if (isset($_SESSION["action"])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION["action"]; ?>
        <button type="button" class="btn-close" ></button>
    </div>
    <?php unset($_SESSION["action"]); 
    endif; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="p-4">

<h1>Liste des produits</h1>

<table class="table table-bordered">
    <tr>
        <th class="px-3">ID</th>
        <th class="px-3">Produit</th>
        <th class="px-3">Prix</th>
        <th class="px-3">Nombre</th>
        <th class="px-3">Actions</th>
    </tr>
    <?php require "connect.php";
    foreach($pdo->query(" SELECT * FROM liste ") as $row) { ?>
    <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['produit'] ?></td>
    <td><?= $row['prix'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td>
    <a href="details.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Voir</a>
    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
        <?php }?>
    </tr>
</table>
<a href="add.php"><input type="submit"value="Ajouter un produit" class="btn btn-primary" ></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>