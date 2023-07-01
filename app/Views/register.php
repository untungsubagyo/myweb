<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/voler/dist/assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/images/favicon.svg" height="48" class='mb-4'>
                                <h3>Sign Up</h3>
                                <p>Please fill the form to register.</p>
                            </div>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form method="POST" action="/register/process">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="user_name">Name</label>
                                            <input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo old('user_username');?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="user_username">Username</label>
                                            <input type="text" id="user_username" class="form-control" name="user_username">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="user_pass">Password</label>
                                            <input type="password" id="user_pass" class="form-control" name="user_pass">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pass_confirm">Password Confirm</label>
                                            <input type="password" id="pass_confirm" class="form-control" name="pass_confirm">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="user_email">Email</label>
                                            <input type="email" id="user_email" class="form-control" name="user_email">
                                        </div>
                                    </div>
                                </diV>
                                <a href="/login">Have an account? Login</a>
                                <div class="clearfix">
                                    <button class="btn btn-primary float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/app.js"></script>

    <script src="<?php echo base_url(); ?>assets/themes/voler/dist/assets/js/main.js"></script>
</body>

</html>