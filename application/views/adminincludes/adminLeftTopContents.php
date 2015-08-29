<div class="navbar nav_title" style="border: 0;">
    <a href="javascript:;" class="site_title"><i class="fa fa-graduation-cap"></i>
        <span class="dancing-script">
           CSIT Portal
        </span>
    </a>
</div>
<div class="clearfix"></div>

<!-- menu prile quick info -->
<div class="profile">
    <div class="profile_pic">
        <img src=<?php echo base_url('images/user.png');?> alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo ucfirst($this->session->userdata['logged_in']['fullname']); ?></h2>
    </div>
</div>