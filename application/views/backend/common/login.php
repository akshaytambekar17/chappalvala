<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url()?>admin"><b><?= !empty($heading)?$heading:'Login'?></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in</p>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <?php //echo form_open(); ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" value="<?= set_value('email_id');?>">
<!--                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
                    <div class="error"><?php echo form_error('email_id'); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" value="<?= set_value('password');?>">
<!--                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                    <div class="error"><?php echo form_error('password'); ?></div>
                </div>
                <div class="row">
<!--                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>-->
                    <!-- /.col -->
                    <div class="col-xs-12 mt-20">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            <?php //echo form_close(); ?>
            </form>
            <?php if(empty($hide_social_login)){?>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                </div>
            <?php } ?>
             
<!--            <a href="#">I forgot my password</a><br>
            <a href="<?= base_url()?>register" class="text-center">Register a new membership</a>-->

        </div>
        <!-- /.login-box-body -->
    </div>

<!-- /.login-box -->