<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/admin_login.css">
    <title>Login Page</title>
  </head>
  <body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">LOGIN</h1>
            </div>
            <div class="card-text">
                <?= $this->session->flashdata('message');?>
                <form method="post" action="<?= base_url();?>admin/">
                    <div class="mb-5">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username');?>" aria-describedby="emailHelp">
                      <?= form_error('username');?>
                    </div>
                    <div class="mb-5">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name ="password" class="form-control" id="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>