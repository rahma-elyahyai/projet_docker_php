<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$dbname = 'ecole';

// Connexion à MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
echo "<h1>Connexion réussie à la base de données MySQL !</h1>";
?>
