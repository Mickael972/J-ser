<?php
require_once __DIR__ . '/bdd/pdo.php';
require_once __DIR__ . '/import_shoes.php';
require_once __DIR__ . '/layout/header.php';




$stmt = $pdo->query("SELECT * FROM chaussures");
$results = $stmt->fetchAll(); ?>
<section class="container mt-5 fix">
    <div class="row gap-3 justify-content-center">
<?php
foreach($results as $result){?>


    
        <div class="d-flex flex-column justify-content-between col-md-3 border border-dark p-0 rounded-top">
            <h2 class="fs-6 text-center text-light bg-dark rounded-top py-3 px-1">
                <?php echo substr($result['name'], 0, 25) ?>
            </h2>
            <img src="<?php echo $result['img']?>" alt="" class="img-fluid">
            <span class="fs-6 text-center text-light bg-dark rounded-top py-3 px-1">
            <?php echo substr($result['prix'], 0, 3)  ?> $
        </span>
        </div>
<?php  } ?>
</div>
</section>







<?php
require_once __DIR__ . '/layout/footer.php';










