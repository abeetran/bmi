<nav class="cd-side-nav is-fixed">
    <ul>
        <li class="cd-label">Main</li>
        <li class="overview"><?php echo anchor(site_url('admin'), 'Overview');?></li>
        <li class="has-children posts">
            <a href="#">Posts</a>

            <ul>
                <li class=""><?php echo anchor(site_url('admin/article'), 'Danh sách bài viết');?></li>
                <li><?php echo anchor(site_url('admin/article/edit'), 'Thêm bài viết');?></li>
                <li><?php echo anchor(site_url('admin/category'), 'Danh sách chuyên mục');?></li>
                <li><a href="#0">Tags</a></li>
            </ul>
        </li>

        <li class="has-children pages">
            <a href="#0">Pages</a>
            <ul>
                <li><?php echo anchor(site_url('admin/page'), 'Danh sách trang');?></li>
                <li><?php echo anchor(site_url('admin/page/edit'), 'Thêm trang');?></li>
            </ul>
        </li>

        <li class="medias"><?php echo anchor(site_url('cms/media'), 'Media');?></li>
    </ul>

    <ul>
        <li class="cd-label">Settings</li>
        <li class="has-children users">
            <a href="#0">Users</a>

            <ul>
                <li><a href="users.php">All Users</a></li>
                <li><a href="user-addnew.php">Add New</a></li>
                <li><a href="user-edit.php">Your Profile</a></li>
            </ul>
        </li>
        <li class="has-children tools">
            <a href="#0">Tools</a>
            <ul>
                <li><a href="#0">Google Map contact</a></li>
            </ul>
        </li>
        <li class="settings"><a href="#0">Settings</a></li>
    </ul>
</nav>