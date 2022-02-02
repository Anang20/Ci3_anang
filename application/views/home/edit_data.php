<div class="container-fluid">
    <h3><?= $title; ?></h3>
    <hr>
    <br>

    <form method="POST" action="<?= base_url('Home/proses_edit_data') ?>">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="username" required="" value="<?= $user['username']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
            <input type="email" class="form-control" name="email" required="" value="<?= $user['email']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
            <input type="password" class="form-control" name="password" required="" value="<?= $user['password']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>