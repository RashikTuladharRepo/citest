<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator | Rashik Tuladhar</title>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/animate.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/custom.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/floatexamples.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/green.css');?>">


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
                            <h3><?php echo ucwords($this->session->userdata['logged_in']['role']); ?></h3>
                            <?php $this->load->view('administratorincludes/adminnavigation'); ?>
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
                        <?php $this->load->view('administratorincludes/adminRightTopContents'); ?>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
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
<script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('scripts/custom.js'); ?>"></script>


</body>

</html>
