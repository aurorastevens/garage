<?php

$username = 'root';
$password = 'root';

try {
    $conn = new PDO ("mysql:host=localhost;dbname=garagebedrijf", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connectie gelukt';
} catch (PDOException $error) {
    echo $error->getMessage();
}
