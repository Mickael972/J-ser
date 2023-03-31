
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="register_process.php" method="post">
            <div class="m-3 w-75">
                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
            </div>
            <div class="m-3 w-75">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="m-3 w-75">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="m-3 col-4 mx-auto">
                <input type="submit" class="btn btn-success" value="Create Account">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>