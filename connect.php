<?php
define('SERVER', 'localhost');
define('DBNAME', 'crud');
define('USER', 'root');
define('PASSWD', 'root');
$dns="mysql:host=".SERVER.";dbname=".DBNAME;
try{
$pdo=new PDO($dns,USER,PASSWD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
$msg = 'Erreur ' . $e->getFile() . ' ligne ' . $e->getLine() .
' : ' . $e->getMessage();
die($msg);

}
?>