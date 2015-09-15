<li class="">
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo base_url('images/user.png'); ?>" alt="">
        <?php echo ucwords($this->session->userdata['logged_in']['fullname']); ?>
        <span class="fa fa-chevron-down"></span>
    </a>
    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
        <li><a href="<?php echo site_url("UserControl/getProfileAdmin/".$this->session->userdata['logged_in']['id']); ?>">  <i class="fa fa-key pull-right"></i> Change Password</a>
        </li>
        <li><a href="<?php echo site_url("Logout"); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
        </li>
    </ul>
</li>


<!---->
<!--<li>-->
<!--    <a href="javascript:;">-->
<!--        <span class="badge bg-red pull-right">50%</span>-->
<!--        <span>Settings</span>-->
<!--    </a>-->
<!--</li>-->
<!--<li>-->
<!--    <a href="javascript:;">Help</a>-->
<!--</li>-->