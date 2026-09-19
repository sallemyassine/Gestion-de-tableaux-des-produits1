<?php
 require "connect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $produit = $_POST['produit'];
    $prix = $_POST['prix'] ;
    $nombre = $_POST['nombre'];

    if ($produit && $prix && $nombre) {
        $sql = "INSERT INTO liste (produit, prix, nombre) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$produit,$prix,$nombre]);
        $_SESSION["action"]="le produit ajouté avec succès";
       
    } else {
        echo "Tous les champs sont obligatoires";
    }
     header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ajouter produit</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow">
        <h3 class="mb-3">Ajouter un produit</h3>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Produit</label>
                <input type="text" name="produit" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="prix" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <input  class="btn btn-primary"  type="submit" value="Ajouter" >
            <a href="index.php" class="btn btn-primary" >Retour</a>

        </form>
    </div>

</div>

</body>
</html>