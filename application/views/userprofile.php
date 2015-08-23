<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>


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
                <?php $this->load->view('adminLeftTopContents'); ?>
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <?php $this->load->view('adminLeftNav'); ?>
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
                        <?php $this->load->view('adminRightTopContents'); ?>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row profile-section">

                <h3>User Profile</h3>


                <div class="user-profile-section">

                    <div class="form-error">
                        <?php echo validation_errors();?>
                    </div>

                    <?php echo form_open("UserControl/updateProfile");

                    foreach ($user_records as $userdetails) { ?>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon fixed-values"><i class="fa fa-user"></i> Username : </div>
                                <input type="text" name="username" id="usernameff" class="form-control fixed-values"
                                       value="<?php echo $userdetails->username; ?>" disabled>
                            </div>
                        </div>

                        <input type="hidden" name="user" value="<?php echo $userdetails->username; ?>">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon fixed-values"><i class="fa fa-user"></i> Full Name : </div>
                                <input type="text" class="form-control fixed-values" disabled
                                       value="<?php echo ucwords($userdetails->fullName); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon fixed-values"><i class="fa fa-location-arrow"></i></div>
                                <input type="text" class="form-control fixed-values" disabled
                                       value="<?php echo ucwords($userdetails->address); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon fixed-values"><i class="fa fa-building"></i></div>
                                <input type="text" class="form-control fixed-values" disabled
                                       value="<?php echo ucwords($userdetails->college); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                <input name="email" class="form-control" type="text" placeholder="Email Address"
                                       id="email" value="<?php echo $userdetails->email; ?>">
                            </div>
                        </div>


                        <!--Password Box-->
                        <div class="password-form" id="password-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input name="oldpassword" class="form-control" type="text"
                                           placeholder="Current Password" id="oldpassword">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                                    <input name="newpassword" class="form-control" type="text"
                                           placeholder="New Password" id="newpassword">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
                                    <input name="renewpassword" class="form-control" type="text"
                                           placeholder="Re-Enter New Password" id="renewpassword">
                                </div>
                            </div>
                        </div>
                        <!--Password Box-->

                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" name="update" id="update" class="btn btn-success"><i
                                        class="fa fa-pencil"></i> Update
                                </button>
                            </div>
                        </div>


                        <!--Links-->
                        <li id="passwordchange"><a><i class="fa fa-key"></i>&nbsp; Change Password</a></li>
                        <li id="emailchange"><a><i class="fa fa-envelope-o"></i>&nbsp; Change Email </a></li>


                        <?php echo form_close();
                    } ?>
                </div>

            </div>


            <!-- footer content -->
            <?php $this->load->view('adminFooter'); ?>
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

        $("#passwordchange").css({"list-style": "none"});
        $("#passwordchange a").css({
            "list-style": "none",
            "color": "red",
            "text-decoration": "none",
            "cursor": "pointer"
        });

        $("#emailchange").css({"list-style": "none"});
        $("#emailchange a").css({"list-style": "none", "color": "red", "text-decoration": "none", "cursor": "pointer"});

        $("#update").css({"display": "none"});
        $(".password-form").css({'display': 'none'});
        $("#email").attr('disabled', 'disabled')

        $.noConflict();
        $("#passwordchange").click(function () {
            $(".password-form").delay(500).fadeToggle();
            $("#email").attr('disabled', 'disabled');
            $("#update").css('display', 'block');
        });

        $("#emailchange").click(function () {
            $(".password-form").hide();
            $("#email").removeAttr('disabled', 'disabled');
            $("#update").css('display', 'block');
        });
    });

</script>
<script type="text/javascript" src="<?php echo base_url('scripts/custom.js'); ?>"></script>
<script src="<?php echo base_url('scripts/sweetalert.min.js'); ?>" type="text/javascript"></script>


</body>

</html>
