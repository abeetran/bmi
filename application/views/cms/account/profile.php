<div class="page-header">
  <h3>PROFILE : <?php echo strtoupper($userdata->name);?></h3>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-5">
		<!--
		<ul class="list-group">
			<li class="list-group-item text-center">
				<p id="message-avatar" class="text-center"></p>
				<div class="thumbnail">
					<img id="avatar_view" class="img-responsive" src="<?php //inchuoi_duongdanfile('assets/public/avatar/'.$this->session->userdata['avatar']); ?>" alt="avatar" />
				</div>
			</li>
			<li id="edit_avatar" class="list-group-item text-center">
				<?php //echo form_open('', ['id' => 'form_upload']);?>
				<div class="input-group">
					<input type="file" name="avatar" id="avatar"/>
					<span class="input-group-btn">
						<input type="submit" id="do_upload" class="btn btn-primary" value="upload" />
					</span>
				</div>
				<?php //echo form_close();?>
			</li>
		</ul>
		-->
		<table class="table"> 
			<tbody> 
				<tr> 
					<td><strong>Email</strong></td> 
					<td class="type-info text-right"><?php echo $userdata->email;?></td> </tr> 
				<tr> 
					<td><strong>Fullname</strong></td> 
					<td class="type-info text-right">
						<a href="#change_fullname" id="txt_fullname" data-toggle="modal">
							<?php echo $userdata->fullname;?> <span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td> 
				</tr> 
				<tr> 
					<td><strong>Reg Date</strong></td> 
					<td class="type-info text-right"><?php echo date('d/m/Y', strtotime($userdata->regdate));?></td> </tr> 
				<tr> 
					<td><strong>Role</strong></td> 
					<td class="type-info text-right"><?php echo inchuoi_nhomthanhvien($userdata->role);?></td> </tr> 
				<tr> 
					<td><strong>Articles Count</strong></td> 
					<td class="type-info text-right">0</td> </tr> 
				<?php if (isset($this->session->userdata['name']) && $this->session->userdata['name'] == $userdata->name): ?>
				<tr> 
					<td><strong>Password</strong></td> 
					<td class="type-info text-right">
						<a href="#change_password" id="change_pass_ajax" data-toggle="modal">
							Change password <span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td> 
				</tr> 
				<?php endif?>
			</tbody> 
		</table>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-7">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">BÀI VIẾT MỚI NHẤT CỦA <?php echo strtoupper($userdata->name);?></h3>
			</div>
		  <div class="panel-body">
			  <table style="border:none;"> 
					<tbody> 
						<tr> 
							<td>
								<strong>1 - Tiêu đề</strong>
								<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>
								<p class="text-right small">Category 1 - 2016-01-01 - View 0</p>
							</td> 
						<tr>  
							<td>
								<strong>2 - Tiêu đề</strong>
								<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>
								<p class="text-right small">Category 1 - 2016-01-01 - View 0</p>
							</td> 
						</tr> 
						<tr>  
							<td>
								<strong>3 - Tiêu đề</strong>
								<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>
								<p class="text-right small">Category 1 - 2016-01-01 - View 0</p>
							</td> 
						<tr>  
							<td>
								<strong>4 - Tiêu đề</strong>
								<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>
								<p class="text-right small">Category 1 - 2016-01-01 - View 0</p>
							</td> 
						<tr>  
							<td>
								<strong>5 - Tiêu đề</strong>
								<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>
								<p class="text-right small">Category 1 - 2016-01-01 - View 0</p>
							</td> 
					</tbody> 
				</table>
		  </div>
		  <div class="panel-footer">Xem thêm bài viết của <?php echo strtoupper($userdata->name);?></div>
		</div>

	</div>
</div>

<?php if (isset($this->session->userdata['name']) && $this->session->userdata['name'] == $userdata->name): ?>
<div id="change_fullname" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 class="modal-title"><span class="glyphicon glyphicon-edit"></span> THAY ĐỔI HỌ &amp; TÊN</h3>
			</div>
			<div class="modal-body">
				<p class="text-center" id="msg_change_fullname"></p>
				<form action="#" id="form_change_fullname" method="post" class="clearfix">
					<div class="modal-padding col-md-12">
						<div class="form-group">
							<label class="control-label" for="fullname">Họ &amp; Tên </label>
							<div class="controls">
								<input type="text" class="form-control" id="fullname" placeholder="Nhập họ tên mới" required="" autofocus="" value="<?php echo $userdata->fullname;?>">
								<span id="msg_fullname" class="modal-msg"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="password">Mật khẩu</label>
							<div class="controls">
								<input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu để xác nhận" required="">
								<span id="msg_password" class="modal-msg"></span>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="btn_change_fullname" class="btn btn-primary" value="Lưu thay đổi" />
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div><!--  /.modal -->

<!-- change_password -->
<div class="modal fade" id="change_password">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><span class="glyphicon glyphicon-edit"></span> THAY ĐỔI MẬT KHẨU</h3>
			</div>
			<div class="modal-body">
				<p class="text-center" id="msg_change_password"></p>
				<form action="#" method="post" id="form_change_password" class="clearfix">
					<div class="modal-padding col-md-12">
						<div class="form-group">
							<label class="control-label" for="old_password">Mật khẩu cũ</label>
							<div class="controls">
								<input type="password" class="form-control" id="old_password" name="old_password" placeholder="Nhập mật khẩu cũ" required=""  autofocus="">
								<span class="modal-msg" id="msg_old_password"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="new_password">Mật khẩu mới</label>
							<div class="controls">
								<input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nhập mật khẩu mới" required="">
								<span class="modal-msg" id="msg_new_password"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="confirm_new_password">Xác nhận mật khẩu mới</label>
							<div class="controls">
								<input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Nhập lại mật khẩu mới" required="">
								<span class="modal-msg" id="msg_confirm_new_password"></span>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="btn_change_password" class="btn btn-primary" value="Lưu thay đổi" />
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$(document).ready(function() {
		$('input:file').upInputFile();
		$('#form_change_password').submit(function(event) {
			event.preventDefault();
			var cp = $('#old_password').val();
			var np = $('#new_password').val();
			var rnp = $('#confirm_new_password').val();

			if (cp.length == 0) {
				$('#msg_old_password').html('<span class="text-warning"> Hãy nhập mật khẩu</span>');
			} else {
				$('#msg_old_password').html('');
			};
			if (np.length == 0) {
				$('#msg_new_password').html('<span class="text-warning">Hãy nhập mật khẩu mới</span>');
			} else {
				$('#msg_new_password').html('');
			};
			if (rnp.length == 0) {
				$('#msg_confirm_new_password').html('<span class="text-warning">Hãy nhập lại mật khẩu mới</span>');
			} else {
				$('#msg_confirm_new_password').html('');
			};
			if (np != rnp) {
				$('#msg_confirm_new_password').html('<span class="text-warning">Mật khẩu không trùng nhau</span>');
			} else {
				$('#msg_confirm_new_password').html('');
			};
			if (
				$('#msg_old_password').html().length == 0 &&
				$('#msg_new_password').html().length == 0 &&
				$('#msg_confirm_new_password').html().length == 0
			) {
				$('#msg_change_password').html('');
				$.post('<?php echo site_url('cms/account/ajax_thaydoi_matkhau');?>', { id : <?php echo $userdata->id;?>, current_password : cp, new_password : np }, function(data) {
					if (data.msg_old_password) {
						$('#msg_old_password').html(data.msg_old_password);
					} else {
						$('#msg_old_password').html('');
					};
					if (data.msg_new_password) {
						$('#msg_new_password').html(data.msg_new_password);
					} else {
						$('#msg_new_password').html('');
					};
					if (data.msg_change_password) {
						$('#msg_change_password').html(data.msg_change_password);
						setTimeout(function() {
							location.href = '<?php echo site_url('cms/auth/logout');?>';
						}, 1000);
					} else {
						$('#msg_change_password').html('');
					};
				});
			} else {
				$('#msg_change_password').html('<span class="text-warning">Hãy nhập đầy đủ và chính xác các thông tin</span>');
			};
		});

		$('#form_change_fullname').submit(function(event) {
			event.preventDefault();
			var password = $('#password').val();
			var fullname = $('#fullname').val();

			if (fullname.length == 0) {
				$('#msg_fullname').html('<span class="text-warning">Hãy nhập họ tên của bạn');
			} else{
				$('#msg_fullname').html('');
			};
			if (password.length == 0) {
				$('#msg_password').html('<span class="text-warning">Hãy nhập mật khẩu để xác nhận bạn là chủ tài khoản');
			} else{
				$('#msg_password').html('');
			};
			if (
				$('#msg_fullname').html().length == 0 &&
				$('#msg_password').html().length == 0
			) {

				$('#msg_change_fullname').html('');
				$.post('<?php echo site_url('cms/account/ajax_thaydoi_ten');?>', { id : <?php echo $userdata->id;?>, fullname : fullname, password : password }, function(data) {
					if (data.msg_password) {
						$('#msg_password').html(data.msg_password);
					} else{
						$('#msg_password').html('');
					};
					if (data.msg_fullname) {
						$('#msg_fullname').html(data.msg_fullname);
					} else{
						$('#msg_fullname').html('');
					};
					if (data.msg_change_fullname) {
						$('#msg_change_fullname').html(data.msg_change_fullname);
						setTimeout(function() {
							location.href = '<?php echo site_url('cms/auth/logout');?>';
						}, 1000);
					} else{
						$('#msg_change_fullname').html('');
					};
				});

			} else{
				$('#msg_change_fullname').html('<span class="text-warning">Hãy nhập đầy đủ và chính xác các thông tin</span>');
			};
		});

		$('#form_upload').submit(function(event) {
			event.preventDefault();
			$.ajaxFileUpload({
				url             :'<?php echo base_url('cms/account/ajax_avatar');?><?php echo '/' . $userdata->id;?>',
				secureuri       :false,
				fileElementId   :'avatar',
				dataType        : 'json',
				success : function (data, status)
				{
					if (data.status == 'success') {
						$('#message-avatar').html('<span class="text-success">'+data.msg+'</span>');
					} else {
						$('#message-avatar').html('<span class="text-danger">'+data.msg+'</span>');
					};
					setTimeout(function () {
						$('#message-avatar').html('');
					}, 2500);
					$('#avatar_view').attr('src', data.src);
				}
			});
		});

	});
</script>

<?php endif;?>