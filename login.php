<?php
require "connect.php" ;
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $login=$_POST["login"];
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
    $clé=password_hash($mdp,PASSWORD_DEFAULT);
    $sql="INSERT INTO user (login,email,password) VALUES(?,?,?)";
    $r=$pdo->prepare($sql);
    $r->BindParam(1,$login,PDO::PARAM_STR);
    $r->BindParam(2,$email,PDO::PARAM_STR);
    $r->BindParam(3,$clé,PDO::PARAM_STR);
    $r->execute();
    header("location: index.php" );
    exit();
    


}
?>