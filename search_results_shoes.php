<?php
require_once __DIR__ . '/import_shoes.php';
require_once "functions/functions.php";
// Page de résultats de recherche dans la base de données (pas dans le fichier)
require_once __DIR__ .'/bdd/pdo.php';
$search = strtolower($_GET['q']);
if (empty($search)){
    redirect("index.php");
}

$stmt = $pdo->prepare("SELECT * FROM chaussures WHERE name LIKE '%search%'");
$stmt->execute();
$results = $stmt->fetchAll();

var_dump($results);








