<?php require_once __DIR__. '/layout/header.php';?>
<div class="container-fluid text-light text-center mt-5 d-flex align-items-center justify-content-center" id="custom-background">
    <div>   
            <h1 class="my-5">Connection Form</h1>
            <form method="post" action="connection.php">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required><br><br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required><br><br>
                <input type="submit" value="Get Connect">
            </form>
        </div>
</div>
<?php require_once __DIR__.'/layout/footer.php';?>
