<?php
require_once __DIR__ . '/import_shoes.php';
require_once "functions/functions.php";
require_once __DIR__ . '/layout/header.php';

// Page de résultats de recherche dans la base de données (pas dans le fichier)
require_once __DIR__ .'/bdd/pdo.php';
$search = strtolower($_GET['q']);
if (empty($search)){
    redirect("index.php");
}
$stmt = $pdo->prepare("SELECT * FROM chaussures WHERE nom LIKE :search");
$stmt->execute(['search' => "%$search%"]);
$results = $stmt->fetchAll();
?>
<h2 class="text-center mt-5">Number of results : <?php echo count($results)?></h2>
<section class="container mt-5 fix">
    <div class="row gap-3 justify-content-center">
<?php

displayCollection($results);


