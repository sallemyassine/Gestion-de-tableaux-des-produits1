<?php
require "connect.php";
?>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST"){
    // Récupération des données du formulaire
    $login = $_POST['login'];
    $email=$_POST['email'];
    $mdp = $_POST['mdp'];

    // Préparer la requête
    $sql = "SELECT * FROM user ";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $row) {
        if (password_verify($mdp,$row['password'])){
            $_SESSION['msg']="mot de passe trouvé";
            header("location: index.php");

        }
       
    }
         $_SESSION['msg']="mot de passe non trouvé";
        echo $_SESSION['msg'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    width: 300px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin: 8px 0 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #0056b3;
}

.msg {
    text-align: center;
    color: red;
}
</style>
</head>
<body>
    <form  method="POST">
        login: <input type="text" name="login"> <br>
        email: <input type="text" name="email"><br>
        mot de passe: <input type="password" name="mdp"> <br>
        <input type="submit" value="ajouter"> <br>

    </form>
</body>
</html>

