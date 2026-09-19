<?php
require "connect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id=$_GET['id'];
$sql = "DELETE FROM liste WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1,$id,PDO::PARAM_INT);
    $stmt->execute();
    $_SESSION["action"]="le produit est supprimé ";

    header("Location: index.php");
    
}
?>