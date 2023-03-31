<?php require_once __DIR__ . '/layout/header.php';?>


<div class="container-fluid custom-background d-flex align-items-center flex-column justify-content-center">
    <h1 class="text-light mt-5">Register</h1>

    <form class="d-flex flex-column justify-content-center align-items-center text-light" action="register_process.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address :</label>
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password :</label>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>


<?php require_once __DIR__ . '/layout/footer.php';?>