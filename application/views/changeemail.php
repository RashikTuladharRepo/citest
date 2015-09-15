<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Change Email! | </title>


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

                <h3>Change Email</h3>

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
                        echo "<div class=\"alert $boxcolor\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a><strong>Warning!</strong>&nbsp;&nbsp;" . $result['msg'] . "</div>";
                    }
                    ?>

                    <div class="row container">
                        <?php
                        $attributes = array('id' => 'changePassword', 'class' => 'user-profile-form');
                        $userid =  $this->uri->segment(3);
                        echo form_open('UserControl/changeEmail/'.$userid, $attributes);
                        ?>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="text" class="form-control" name="oldemail" id="oldemail" placeholder="Your Current Email">
                        </div>
                        <div class="input-group" id="newemailf">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="text" class="form-control" name="newemail" id="newemail" placeholder="Your New Email" value="<?php echo set_value('newemail'); ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon" id="reemailf"><i class="fa fa-keyboard-o"></i></div>
                            <input type="text" class="form-control" name="renewemail" id="renewemail" placeholder="Re-Enter New Email" value="<?php echo set_value('renewemail'); ?>">
                        </div>
                        <div class="input-group">
                            <button type="submit" id="changeemail" name="changeemail" class="btn btn-success">Change Email</button>
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

                $('#changeemail').attr('disabled','disabled');
                $('#renewemail').keyup(function(){
                    var newemail=$('#newemail').val();
                    var reemail=$('#renewemail').val();
                    if(newemail==reemail)
                    {
                        $('#newemailf').removeClass('has-error');
                        $('#newemailf').addClass('has-success');
                        $('#changeemail').removeAttr('disabled');
                    }
                    else
                    {
                        $('#newemailf').addClass('has-error');
                    }
                });
                $('.alert').delay(3000).fadeOut();

            });

        </script>
        <script type="text/javascript" src="<?php echo base_url('scripts/custom.js'); ?>"></script>
        <script src="<?php echo base_url('scripts/sweetalert.min.js'); ?>" type="text/javascript"></script>


</body>

</html>
