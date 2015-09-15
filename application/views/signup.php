<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <title>Sign Up - CSIT Notes Portal</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/custom-styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('scripts/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/bootstrap-filestyle.min.js'); ?>"></script>

    <!--auto complete-->
    <script type="text/javascript" src="<?php echo base_url('scripts/jquery.autocomplete.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/colleges-autocomplete.js'); ?>"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--auto complete-->



    <style type="text/css">
        .btn-primary {
            padding: 9px;
        }

        /*Auto Complete*/

        #searchfield {
            display: block;
            width: 100%;
            text-align: center;
            margin-bottom: 35px;
        }

        #searchfield form {
            display: inline-block;
            background: #eeefed;
            padding: 0;
            margin: 0;
            padding: 5px;
            border-radius: 3px;
            margin: 5px 0 0 0;
        }

        #searchfield form .biginput {
            width: 600px;
            height: 40px;
            padding: 0 10px 0 10px;
            background-color: #fff;
            border: 1px solid #c8c8c8;
            border-radius: 3px;
            color: #aeaeae;
            font-weight: normal;
            font-size: 1.5em;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        #searchfield form .biginput:focus {
            color: #858585;
        }

        .flatbtn {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            outline: 0;
            border: 0;
            color: #f3faef;
            text-decoration: none;
            background-color: #6bb642;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            font-size: 1.2em;
            font-weight: bold;
            padding: 12px 22px 12px 22px;
            line-height: normal;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
            -moz-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
            box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
        }

        .flatbtn:hover {
            color: #fff;
            background-color: #73c437;
        }

        .flatbtn:active {
            -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .autocomplete-suggestions {
            border: 1px solid #999;
            background: #31B0D5;
            cursor: default;
            overflow: auto;
        }

        .autocomplete-suggestion {
            padding: 10px 5px;
            font-size: 1.2em;
            white-space: nowrap;
            overflow: hidden;
        }

        .autocomplete-selected {
            background: #286090;
        }

        .autocomplete-suggestions strong {
            font-weight: normal;
        }

    </style>

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
                <?php
                $err = validation_errors();
                if (isset($err)) {
                    if (strlen($err) > 0) {
                        ?>
                        <div class="alert alert-warning"><a href="#" class="close"
                                                            data-dismiss="alert">&times;</a><?php echo $err; ?></div>
                        <?php
                    }
                }
                ?>
            </div>


            <?php echo form_open_multipart('UserHandler/signUpUser'); ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control" id="fname" name="fName" placeholder="Full Name"
                           value="<?php echo set_value('fName'); ?>">
                </div>
                <br>

                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                           value="<?php echo set_value('address'); ?>">
                </div>
                <br>

                <div class="input-group" id="colge">
                    <div class="input-group-addon"><i class="fa fa-building"></i></div>
                    <input type="text" class="form-control" name="college" id="autocomplete" placeholder="College"
                           value="<?php echo set_value('college'); ?>">
                </div>
                <br>

                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address"
                           value="<?php echo set_value('email'); ?>">
                </div>
                <br>

                <input type="file" id="userImage" name="userImage" class="filestyle" data-buttonName="btn-primary">
            </div>
            <button class="btn btn-info btn-block login" type="submit" name="signup">Sign Up</button>
            <br>
            <a href="<?php echo site_url('Portal'); ?>">Already Have An Account? Login Now</a><br>
            </form>
        </div>
    </div>
</div>
<div class="container text-center">
    <?php
    $this->load->view('includes/footer');
    ?>
</div>

<script type="text/javascript">


    $("#userImage").change(function () {
        readURL(this);
    });

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






</script>
<script>
    $(document).ready(function(){
        $("#email").keyup(function(){
            var valEmail=$("#email").val();
            if(valEmail==""){
                alert('hello');
            }else{
                $.ajax({
                    type:"POST",
                    url:"UserHandler/availablity",
                    data:"email="+valEmail,
                    success:function(response){
                        alert(response);
                    }
                })
            }
        })
    });
</script>

</body>
</html>























