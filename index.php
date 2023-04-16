<?php
require_once __DIR__ . '/bdd/pdo.php';
require_once __DIR__ . '/import_shoes.php';
require_once __DIR__ . '/layout/header.php';
require_once "functions/functions.php";



$stmt = $pdo->query("SELECT * FROM chaussures");
$results = $stmt->fetchAll(); ?>
<section class="container mt-5 test">
    <div class="row gap-3 justify-content-center">
        <?php
        displayCollection($results);
        ?>
    </div>
</section>





<?php
require_once __DIR__ . '/layout/footer.php';