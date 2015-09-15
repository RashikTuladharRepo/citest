<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User | Change Password</title>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/animate.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/custom.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/floatexamples.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/green.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/admin-styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/sweetalert.css'); ?>">

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <!-- menu prile quick info -->
                <?php $this->load->view('adminincludes/adminLeftTopContents'); ?>
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3><?php echo $this->session->userdata['logged_in']['role'];?></h3>
                        <?php $this->load->view('adminincludes/adminLeftNav'); ?>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <?php $this->load->view('adminincludes/adminRightTopContents'); ?>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row profile-section">

                <h3>Change Password</h3>

                <div class="user-profile-section">


                        <?php
                            $err=validation_errors();
                            if(isset($err))
                            {
                                if(strlen($err)>0)
                                    echo "<div class=\"alert alert-error\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a><strong>Warning!</strong>".validation_errors()."</div>";
                            }

                            if (isset($result)) {

                                $boxcolor = ($result['errorCode'] == 1 ? "alert-success" : "alert-error");
                                echo "<div class=\"alert $boxcolor\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a><strong>Message!</strong>&nbsp;&nbsp;" . $result['msg'] . "</div>";
                            }
                        ?>

                    <div class="row container">
                        <?php
                        $attributes = array('id' => 'changePassword', 'class' => 'user-profile-form');
                        $userid =  $this->uri->segment(3);
                        echo form_open('UserControl/changePassword/'.$userid, $attributes);
                        ?>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                            <input data-toggle="tooltip" title="Your Current Password" type="password"
                                   class="form-control" name="oldpassword" id="oldpassword" placeholder="Your Current Password">
                        </div>
                        <div class="input-group" id="newpasswordf">
                            <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                            <input data-toggle="tooltip" title="Your New Password" type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Your New Password">
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon" id="repasswordf"><i class="fa fa-key"></i></div>
                            <input data-toggle="tooltip" title="Confirm Your New Password" type="password" class="form-control" name="renewpassword" id="renewpassword" placeholder="Re-Enter New Password">
                        </div>
                        <div class="input-group">
                            <button type="submit" id="changepassword" name="changepassword" class="btn btn-success">Change Password</button>
                        </div>
                        <?php form_close(); ?>
                    </div>


                    <!-- footer content -->
                    <?php $this->load->view('adminincludes/adminFooter'); ?>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script type="text/javascript" src="<?php echo base_url('scripts/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('scripts/jquery-1.10.2.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript">

            $(document).ready(function () {

                $('input[type=password][name=oldpassword]').tooltip({
                    placement: "right",
                    trigger: "focus"
                });

                $('input[type=password][name=newpassword]').tooltip({
                    placement: "right",
                    trigger: "focus"
                });

                $('input[type=password][name=renewpassword]').tooltip({
                    placement: "right",
                    trigger: "focus"
                });

                $('#changepassword').attr('disabled','disabled');
                $('#renewpassword').keyup(function(){
                    var newpass=$('#newpassword').val();
                    var repass=$('#renewpassword').val();
                    if(newpass==repass)
                    {
                        $('#newpasswordf').removeClass('has-error');
                        $('#newpasswordf').addClass('has-success');
                        $('#changepassword').removeAttr('disabled');
                    }
                    else
                    {
                        $('#newpasswordf').addClass('has-error');
                    }
                });

                $('.alert').delay(3000).fadeOut();




            });

        </script>
        <script type="text/javascript" src="<?php echo base_url('scripts/custom.js'); ?>"></script>
        <script src="<?php echo base_url('scripts/sweetalert.min.js'); ?>" type="text/javascript"></script>


</body>

</html>
