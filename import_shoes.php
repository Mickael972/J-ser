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

$insert_stmt = $pdo->prepare('INSERT INTO chaussures (id, name, img, prix, crea_date) VALUES (?, ?, ?, ?, ?)');
$select_stmt = $pdo->prepare('SELECT id FROM chaussures WHERE id = ?');

 //insertion d'une chaussure dans la table chaussure si elle n'existe pas déjà
 
foreach ($data as $chaussure) {

    // Vérifier si la chaussure existe déjà dans la base de données
    $select_stmt->execute([$chaussure['id']]);
    $existing_chaussure = $select_stmt->fetch();

    if (!$existing_chaussure) {
        $convertiondate = date("Y-m-d H:i:s", $chaussure['release_date_unix']);
        $insert_stmt->execute([$chaussure['id'], $chaussure['name'], $chaussure['grid_picture_url'], $chaussure['retail_price_cents'], $convertiondate]);
    }
}




