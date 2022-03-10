<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Access | Secure Login System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Web Fonts -->

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/login/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/login/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <style>
        .modal-body {
            padding: 2px;
            /* background-color: #343a40; */
        }

        .table {
            margin-bottom: 0px;
        }

        .autoLogin {
            position: absolute;
            left: -13px;
            background-color: #13181c;
            outline: none;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout3" data-bg-image="<?php echo base_url('') ?>assets/login/img/figure/bg3-l.jpg">
        <button class="btn btn-sm btn-dark autoLogin" id="autoLogin"></button>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 fxt-none-991">
                    <div class="fxt-header">
                        <!-- <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <a href="#" class="fxt-logo"><img width="128" height="128" src="<?php echo base_url('') ?>assets/uploads/image/logo/logo.png" alt="Logo"></a>
                        </div> -->
                        <div class="fxt-transformY-50 fxt-transition-delay-2">


                            <h1 data-toggle="modal" data-target="#exampleModal"><?= $site_info['tittle']; ?></h1>
                        </div>
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-form">
                            <h2>Login</h2>
                            <p>Please enter your credential </p>
                            <?php
                            if ($error = $this->session->flashdata('error')) {
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Fail To login!</strong> <?= $error; ?>
                                </div>
                            <?php
                                $this->session->sess_destroy();
                            } ?>
                            <form method="POST" name="auto_login" action="<?php echo base_url('backend/login/Login/authentication_process') ?>">
                                <div class="form-group">
                                    <label for="mobileNumber" class="input-label">Mobile Number</label>
                                    <input type="number" value="" id="number" class="form-control" name="number" placeholder="01674514499" required="required">

                                </div>
                                <div class="form-group">
                                    <label for="password" class="input-label">Password</label>
                                    <input id="password" value="" type="password" class="form-control" name="password" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="fxt-checkbox-area">
                                        <a href="#" class="switcher-text">Forgot Password</a>
                                    </div>
                                </div> -->

                                <br>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-md w-50 btn-info">Log in</button>

                                    <div class="mt-3 showRoleButton">
                                        <button class="btn btn-info mt-1" onclick="auto_login.number.value = '01674514499';auto_login.password.value = '123456'; auto_sign_in()">Demo Access 1</button>
                                    </div>

                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!-- jquery-->
    <script src="<?php echo base_url('') ?>assets/login/js/jquery-3.5.0.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/login/js/popper.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/login/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/login/js/validator.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/login/js/main.js"></script>


    <script>
        $(".showRoleButton").hide();
        $(".autoLogin").click(function() {
            $(".showRoleButton").toggle();
        });
    </script>

</body>

</html>