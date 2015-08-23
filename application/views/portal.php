<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
    <head>
        <title>CSIT Notes Portal</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/custom-styles.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css');?>">
        <script type="text/javascript" src="<?php echo base_url('scripts/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#username').blur(function(){
                    var username=$('#username').val();
                    if(username=="rashik") {
                        $('.avatar').fadeIn(20000, function () {
                            $(this).css({"background-image": "url(images/user.png)"});
                        });
                    }
                    else
                    {
                        $('.avatar').fadeIn(20000, function () {
                            $(this).css({"background-image": "url(images/male.png)"});
                        });
                    }
                });
            });

        </script>
    </head>
<body>
<div class="container">
    <div class="login-container">
        <div class="box-title">
            Access Login
        </div>
        <div class="avatar"></div>
        <div class="form-box">
            <div class="form-error">
                <?php echo validation_errors();?>
            </div>

            <?php if (isset($message)) { ?>
                <p class="text-success"><?php echo $message."<br><br>"; ?>Data inserted successfully</p>
            <?php } ?>

            <?php echo form_open('UserHandler/loginControl'); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input name="username" class="form-control" type="text" placeholder="username" id="username">
                </div>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>

                <button class="btn btn-info btn-block login" type="submit">Login</button>
                <a href="<?php echo site_url('UserHandler/forgotPassword'); ?>">Forgot Password?</a><br>
                <a href="<?php echo site_url('UserHandler/signUp'); ?>">New User? Sign up Now!</a>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="container text-center">
    <?php
        $this->load->view('includes/footer');
    ?>
</div>
</body>
</html>