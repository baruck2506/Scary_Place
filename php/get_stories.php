<?php
require 'config.php';

header("Content-Type: application/json");

try{
    $stmt = $pdo->query("Select * from Stories order by created_at DESC");
    $stories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($stories);
} catch (PDOException $e){
    echo json_encode(["error" => "Erro ao buscar historias: " . $e->getMessage()]);
}