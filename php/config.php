<?php

$host = "localhost";
$dbname = "ScaryPlace";
$username = "root";
$password = "2401";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Erro ao conectar bro" . $e->getMessage());
}