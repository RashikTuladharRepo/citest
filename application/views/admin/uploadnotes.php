<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upload Notes | Rashik Tuladhar</title>


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
                        <h3>Admin</h3>
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
            <div class="row notes-section">
                <h3>
                    Upload Notes
                </h3>
            </div>

            <div class="admin-forms">
                <?php echo form_open(""); ?>
                <div class="input-group">
                    <div class="input-group-addon"><span class="fa fa-file-o"></span></div>
                    <input type="text" class="form-control" id="note-title" name="note-title" required
                           placeholder="Notes Title">
                </div>

                <div class="input-group">
                    <div class="input-group-addon"><span class="fa fa-file-archive-o"></span></div>
                    <select class="form-control" name="doc-type" id="doc-type">
                        <option value="pdf"><i class="fa fa-file-pdf-o"></i> PDF</option>
                        <option value="xlsx">EXCEL</option>
                        <option value="docx">WORD</option>
                        <option value="zip">ZIP</option>
                        <option value="img">IMAGE</option>
                    </select>
                </div>


                <input type="file" class="filestyle" data-buttonName="btn-primary">

                <br>

                <div class="input-group">
                    <div class="input-group-addon"><span class="fa fa-google"></span></div>
                    <input type="text" class="form-control" id="note-link" name="note-link" required
                           placeholder="Google Note Link">
                    <div class="input-group-addon"><a href="" id="link-check">Check Download</a></div>
                </div>




                <button class="btn btn-info btn-block login" type="submit" name="signup">Sign Up</button>
                <?php echo form_close(); ?>
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
        $('#note-link').keyup(function () {
            var a = $('#note-link').val();
            $("#link-check").attr("href", " https://docs.google.com/uc?export=download&id=" + a);


        });
    });
</script>


</body>

</html>
