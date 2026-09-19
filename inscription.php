
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #eef2f3, #8e9eab);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    width: 320px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

button {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #0056b3;
}

.error {
    color: red;
    text-align: center;
    margin-bottom: 10px;
}
</style>
</head>

<body>
<div class="container">
    <h2>Connexion</h2>

    <?php if (!empty($msg)) echo "<div class='error'>$msg</div>"; ?>

    <form method="POST" action="login.php">
        <input type="text" name="login" placeholder="Login" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>
