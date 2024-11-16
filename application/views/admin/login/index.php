<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BSC | Login</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">BSC</h1>

            </div>
            <h3>Welcome to BSC</h3>
            
            <!-- <p>Login in. To see it in action.</p> -->
            <form class="m-t" role="form"  method="Post" action="<?php echo base_url(); ?>admin/login">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username"  value="<?php echo (!set_value('username')) ? '' : set_value('username'); ?>" >
                    <?php echo form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo (!set_value('password')) ? '' : set_value('password'); ?>">
                    <?php echo form_error('Password', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>
