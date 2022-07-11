<?php
// ouverture de la connexion
$dsn = 'mysql:host=localhost;dbname=bdd';
$username = 'root';
$password = 'root';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$db = new PDO($dsn, $username, $password, $options);

// création de la requête
$sql = "SELECT * FROM auteurs";

// envoi de la requête et récupération du résultat
$listeAuteurs = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>