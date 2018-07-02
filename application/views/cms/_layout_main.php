<?php $this->load->view('cms/components/page_main_head.php', $this->data); ?>
<body>
<main class="cd-main-content">
<?php $this->load->view('cms/components/page_main_topnav.php'); ?>	
<?php $this->load->view('cms/components/page_main_sidebar.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <?php $this->load->view($subview); ?>
        <footer>
            <p><?php inchuoi_config('copyright_dev');?></p>
        </footer>
    </div>  
</div> <!-- .content-wrapper -->
</main> <!-- .cd-main-content -->
<div class="clear"></div>
<?php $this->load->view('cms/components/page_main_foot.php'); ?>