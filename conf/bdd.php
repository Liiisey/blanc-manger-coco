<?php

$host = '127.0.0.1';
$dbname = 'blanc_manger_coco';
$user = 'root';
$password = '';

try {
    $dbh = new PDO('mysql:dbname=' . $dbname . ';host=' . $host.";port=3306", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}