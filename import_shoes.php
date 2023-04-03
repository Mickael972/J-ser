<?php
require_once __DIR__. '/bdd/pdo.php';


$content_file = file_get_contents('data/db.json');
$data = json_decode($content_file, true);

var_dump($data);

$stmt = $pdo->prepare('INSERT INTO chaussures (id, name, img, prix, crea_date) VALUES (?, ?, ?, ?, ?)');
foreach ($data as $chaussure) {
    $convertiondate = date("Y-m-d H:i:s", $chaussure['release_date_unix']);
    
    $stmt->execute([$chaussure['id'], $chaussure['name'], $chaussure['grid_picture_url'], $chaussure['retail_price_cents'], $convertiondate]);
}



