<?php require_once __DIR__. '/layout/header.php';?>

<div class="container-fluid text-light d-flex align-items-center flex-column justify-content-center" id="custom-background">
    <h1 class="text-center mt-5">Login</h1>
    <form class="d-flex flex-column justify-content-center align-items-center" method="post" action="connection_login.php">
    <div class="mb-3">
        <label for="email" class="form-label">Name :</label>
        <input type="text" name="name" class="form-control" id="email" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password :</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>
        <button type="submit" class="btn btn-primary">Get Connect</button>
    </form>
</div>
    
    
<?php require_once __DIR__.'/layout/footer.php';?>
