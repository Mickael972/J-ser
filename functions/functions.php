<?php

function redirect(string $location) {
    header('Location: '. $location);
}



function displayCollection(array $results){

foreach($results as $result){?>

    <div class="d-flex flex-column justify-content-between col-md-3 border border-dark p-0 rounded-top">
        <h2 class="fs-6 text-center text-light bg-dark rounded-top py-3 px-1">
            <?php echo substr($result['nom'], 0, 25) ?>
        </h2>
        <img src="<?php echo $result['img']?>" alt="" class="img-fluid">
        <span class="fs-6 text-center text-light bg-dark rounded-top py-3 px-1">
        <?php echo substr($result['prix'], 0, 3)  ?> $
    </span>
    </div>
<?php  } ?>
<?php } ?>