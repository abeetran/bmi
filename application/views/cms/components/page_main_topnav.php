<header class="cd-main-header">
    <div class="logo"></div>

    <a href="#0" class="cd-nav-trigger"><span></span></a>

    <nav class="cd-nav">
        <ul class="cd-top-nav">
            <li><?php echo anchor(site_url(), 'Xem Trang',array('target' => '_blank'));?></li>
            <li class="has-children account">
                <a href="#"><img src="<?php inchuoi_duongdanfile('assets/public/avatar/'.$this->session->userdata['avatar']); ?>" alt="avatar"><?php echo $this->session->userdata['fullname'];?></a>
                <ul class="list-unstyled">
                    <li><?php echo anchor(site_url('cms/account/profile'), 'Your Profile');?></li>
                    <li><?php echo anchor(site_url('cms/auth/logout'), 'Sign Out');?></li>
                </ul>
            </li>
        </ul>
    </nav>
</header> <!-- .cd-main-header -->