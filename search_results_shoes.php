<?php
// Page de résultats de recherche dans la base de données (pas dans le fichier)
require_once __DIR__ .'/bdd/pdo.php';

if (!isset($_get['search'])){
    exit('wrong search');
}

// je recupère les données 
require_once __DIR__ . '/import_shoes.php';

// je recupère les parametres d'url
$searchShoeName = $_GET['search'];

//je fait une recherche par nom 
$searchShoeName = "%$searchShoeName%";

// selection des chaussures correspondant à la recherche dans la bdd
$stmt = $pdo->prepare("SELECT * FROM chaussures WHERE name LIKE :searchShoeName");

$stmt->execute();

$result = $stmt->fetchAll();

// j'affiche les resultats de la recherche 




