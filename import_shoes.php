<?php
require_once __DIR__. '/bdd/pdo.php';

/**
 * import du fichier .json 
 */
 
$content_file = file_get_contents('data/db.json');
$data = json_decode($content_file, true);

/**
 * insertion des données de chaque chaussures dans la table chaussures de la base de données
 */

$stmt = $pdo->prepare('INSERT INTO chaussures (id, name, img, prix, crea_date) VALUES (?, ?, ?, ?, ?)');


 //insertion d'une chaussure dans la table chaussure
 
foreach ($data as $chaussure) {

    $convertiondate = date("Y-m-d H:i:s", $chaussure['release_date_unix']);
    
    $stmt->execute([$chaussure['id'], $chaussure['name'], $chaussure['grid_picture_url'], $chaussure['retail_price_cents'], $convertiondate]);
}



