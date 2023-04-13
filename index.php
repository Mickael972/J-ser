<?php
require_once __DIR__ . '/bdd/pdo.php';
require_once __DIR__ . '/import_shoes.php';



$stmt = $pdo->query("SELECT * FROM chaussures");



require_once __DIR__ . '/layout/header.php';



while ($chaussure = $stmt->fetch()) {

    echo $chaussure['id'];
    echo $chaussure['name'];
    echo $chaussure['grid_picture_url'];
    echo $chaussure['retail_price_cents'];
    echo $chaussure['release_date_unix'];

} 



require_once __DIR__ . '/layout/footer.php';










