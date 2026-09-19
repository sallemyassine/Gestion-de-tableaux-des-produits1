<?php require "connect.php";
session_start();
?>
<?php 
$id=$_GET["id"];
$sql="SELECT produit, prix, nombre FROM liste WHERE id=?";
$ps=$pdo->prepare($sql);
$ps->bindParam(1,$id,PDO::PARAM_INT);
$ps->execute();
$rs=$ps->fetch();
$produit=$rs["produit"];
$prix=$rs["prix"];
$nombre=$rs["nombre"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow">
        <h3 class="mb-3">Modifier un produit</h3>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Produit</label>
                <input type="text" name="produit" class="form-control" value="<?=$produit ?>"required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="prix" class="form-control"value="<?=$prix ?>"required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control"value="<?=$nombre ?>"required>
            </div>

            <input type="submit" class="btn btn-primary"  value="Modifier" >
            <a href="index.php" class="btn btn-primary" >Retour</a>
        </form>
    </div>

</div>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $newproduit=$_POST["produit"];
    $newprix=$_POST["prix"];
    $newnombre=$_POST["nombre"];

$sql2="UPDATE liste SET produit=? , prix=? , nombre=? WHERE id=? ";
$ps2=$pdo->prepare($sql2);
$ps2->bindParam(1,$newproduit,PDO::PARAM_STR);
$ps2->bindParam(2,$newprix,PDO::PARAM_INT);
$ps2->bindParam(3,$newnombre,PDO::PARAM_INT);
$ps2->bindParam(4,$id,PDO::PARAM_INT);
$ps2->execute();
$_SESSION["action"] = "Produit modifié avec succès";
header("location:index.php");
}
?>