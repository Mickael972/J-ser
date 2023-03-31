<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container-fluid text-light d-flex align-items-center flex-column justify-content-center custom-background">
    <h1 class="text-center mt-5">Login</h1>

    <form class="d-flex flex-column justify-content-center align-items-center" action="login_process.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address :</label>
            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Log In</button>
    </form>
</div>


<?php require_once __DIR__ . '/layout/footer.php'; ?>