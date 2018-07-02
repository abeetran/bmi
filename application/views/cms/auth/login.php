<?php echo form_open('', 'class="separated clearfix"');?>
        <h3>ĐĂNG NHẬP HỆ THỐNG</h3>
        <div class="form-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <?php echo form_input('email', set_value('email'), 'class="form-control" id="email" placeholder="Nhập địa chỉ email" required="" autofocus="" autocomplete="off"');?>
                <?php echo form_error('email')?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <?php echo form_password('password', '', 'class="form-control" id="password" placeholder="Nhập mật khẩu" required="" autofocus=""');?>
                <?php echo form_error('password')?>
            </div>
        </div>
        <div class="form-group">
            <?php echo form_submit('login', 'Đăng nhập', 'id="btn-login" class="btn btn-primary"');?>
        </div>
<?php echo form_close();?>
