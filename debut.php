<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>

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

.menu {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    display: flex;
    gap: 20px;
}

.menu a {
    text-decoration: none;
    padding: 12px 20px;
    background: #007BFF;
    color: white;
    border-radius: 8px;
    transition: 0.3s;
    font-weight: bold;
}

.menu a:hover {
    background: #0056b3;
    transform: scale(1.05);
}
</style>

</head>
<body>

<div class="menu">
    <a href="inscription.php">Inscription</a>
    <a href="authentification.php">Authentification</a>
</div>

</body>
</html>