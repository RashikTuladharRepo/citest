<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <title>Sign Up - CSIT Notes Portal</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/custom-styles.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css');?>">
    <script type="text/javascript" src="<?php echo base_url('scripts/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap-filestyle.min.js'); ?>"></script>
    <style type="text/css"> .btn-primary { padding: 9px;}</style>
</head>
<body>
<div class="container">
    <div class="login-container">
        <div class="box-title">
            Sign Up
        </div>
<!--        <div class="avatar">-->
<!--            <img id="imageprev">-->
<!--        </div>-->

        <div class="form-box">
            <div class="form-error">
                <?php echo validation_errors();?>
            </div>


            <?php echo form_open_multipart('UserHandler/signUpUser'); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control" id="fname" name="fName" placeholder="Full Name" value="<?php echo set_value('fName'); ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo set_value('address'); ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    <input type="text" class="form-control" id="college" name="college" placeholder="College" value="<?php echo set_value('college'); ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address"
                           value="<?php echo set_value('email'); ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                    <input type="password" class="form-control" id="repassword" name="repassword"
                           placeholder="Confirm Password">
                </div>
                <br>

                <input type="file" id="userImage" name="userImage" class="filestyle" data-buttonName="btn-primary">

            </div>
            <button class="btn btn-info btn-block login" type="submit" name="signup">Sign Up</button>
            <a href="<?php echo site_url('Portal'); ?>">Already Signed In! Login Now</a><br>
            </form>
        </div>
    </div>
</div>
<div class="container text-center">
    <?php
        $this->load->view('footer');
    ?>
</div>

<script type="text/javascript">

    $(":file").filestyle({buttonName: "btn-primary"});
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.avatar').css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userImage").change(function(){
        readURL(this);
    });



//    $("#username").keyup(function(){
//        var user= $("#username").val();
//        if(user!=" ")
//        {
//            $.ajax({
//                type: "POST",
//                url: '<?php //echo site_url('AjaxCalls'); ?>//',
//                data:"username="+ user+"&method=checkuserexist",
//                success: function(msg) {
//                    if (msg == "yes") {
//                        $("#available").fadeOut(2000).css('display','none');
//                        $("#not-available").fadeIn(2000).css('display','block');
//                    }
//                    else
//                    {
//                        $("#not-available").fadeOut(2000).css('display','none');
//                        $("#available").fadeIn(2000).css('display','block');
//                    }
//                }
//            });
//        }
//    });

</script>

</body>
</html>