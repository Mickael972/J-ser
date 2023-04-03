<?php require_once __DIR__ . '/layout/header.php';?>


<div class="container-fluid text-light d-flex align-items-center flex-column justify-content-center custom-background">

    <h1 class="text-center mt-5">Search Jordan's Sneakers</h1>

    <form class="d-flex flex-column justify-content-center align-items-center" action="search_results_shoes.php" method="GET">
        <div class="mb-3">
        <input class="form-control me-2" type="search" placeholder="Your J's research here" aria-label="Search" name="q" value="<?php echo $_GET['q'] ?? ''; ?>" />
        </div>
        <input type="submit" class="btn btn-primary" value="Search">
    </form>
</div>


<?php require_once __DIR__. '/layout/footer.php';?>