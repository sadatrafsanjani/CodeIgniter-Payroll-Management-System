<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

        <title>Login</title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-img3-body">
        <div class="container">
            <form class="login-form" action="<?php echo base_url(); ?>admin/authentication.html" method="post">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <?php
                    $exception = $this->session->userdata('exception');

                    if($exception){

                        echo "<div class='alert alert-block alert-danger fade in'><p>";
                        echo $exception;
                        echo "</p></div>";
                        $this->session->unset_userdata('exception');
                    }

                    $message = $this->session->userdata('message');

                    if($message){

                        echo "<div class='alert alert-success fade in'><p>";
                        echo $message;
                        echo "</p></div>";
                        $this->session->unset_userdata('message');
                    }
                    ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
