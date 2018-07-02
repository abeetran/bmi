<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CMS_Controller {
    
	public function __construct() {
		parent::__construct();
	}
    
	public function index(){
        
	}
    
    public function profile($id = NULL){
        $this->load->library('upload');
        $this->data['before_head'] = '
        <script src="'.base_url("assets/cms/plugins/jquery/jquery.ajaxupload.js").'"></script>
        <script src="'.base_url("assets/cms/plugins/jquery/jquery.inputfile.js").'"></script>
        ';
        
        if (is_null($id)) {
			if (isset($this->session->userdata['id'])) {
				$id = (int) $this->session->userdata['id'];
			} else {
		      redirect('cms');
			}
		}
        
        $this->data['userdata'] = $this->user_m->get($id, TRUE);
        
		// Load view
        $this->data['subview'] = 'cms/account/profile';
		$this->load->view('cms/_layout_main', $this->data);
    }
    
    public function ajax_thaydoi_ten() {
		// Set rules
		$rules = $this->user_m->rules_change_fullname;
		$this->form_validation->set_rules($rules);

		$this->data['msg'] = [];
		$user_id = intval($this->input->post('id'));
		$fullname = $this->input->post('fullname');
		$password = $this->user_m->hash($this->input->post('password'));
		$user_pass = $this->user_m->get($user_id, TRUE)->password;

		if ($this->form_validation->run() == TRUE) {
			if ($password != $user_pass) {
				$this->data['msg']['msg_password'] = message('span', 'error', 'Mật khẩu không đúng');
			} else {
				if ($this->user_m->save(array('fullname' => $fullname), $user_id) == TRUE) {
					$this->data['msg']['msg_change_fullname'] = message('span', 'success', 'Cập nhật thành công');
				} else {
					$this->data['msg']['msg_change_fullname'] = message('span', 'error', 'Cập nhật thất bại');
				}
			}

		} else {
			$this->data['msg']['msg_fullname'] = form_error('fullname');
		}
		$this->load->view('cms/ajax_result/msg', $this->data);
	}
    
    public function ajax_thaydoi_matkhau() {
		// Set rules
		$rules = $this->user_m->rules_change_password;
		$this->form_validation->set_rules($rules);

		$this->data['msg'] = [];
		$current_password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password');
		$user_id = $this->input->post('id');
		$user_pass = $this->user_m->get($user_id, TRUE)->password;

		// Frocess form
		if ($this->form_validation->run() == TRUE) {
			if ($this->user_m->hash($current_password) != $user_pass) {
				$this->data['msg']['msg_old_password'] = message('span', 'error', 'Mật khẩu không đúng');
			} else {
				if ($this->user_m->save(array('password' => $this->user_m->hash($new_password)), $user_id) == TRUE) {
					$this->data['msg']['msg_change_password'] = message('span', 'success', 'Cập nhật thành công');
				} else {
					$this->data['msg']['msg_change_password'] = message('span', 'error', 'Cập nhật thất bại');
				}
			}
		} else {
			$this->data['msg']['msg_old_password'] = form_error('current_password');
			$this->data['msg']['msg_new_password'] = form_error('new_password');
		}

		$this->load->view('cms/ajax_result/msg', $this->data);
	}
    
    public function ajax_avatar($id = NULL) {
		$this->data['status'] = '';
		$this->data['msg'] = '';
		$file_element_name = 'avatar';
		$this->data['userdata'] = $this->user_m->get($id, TRUE);
		$current_avatar = $this->data['userdata']->avatar;
		$this->data['url'] = site_url('assets/public/avatar') . '/' . $current_avatar;

		$config['upload_path'] = './assets/public/avatar/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($file_element_name)) {
			$this->data['status'] = 'error';
			$this->data['msg'] = $this->upload->display_errors('', '');
		} else {
			$data = $this->upload->data();
			$result = $this->user_m->save(array('avatar' => $data['file_name']), $id);
			if ($result) {
				$this->data['status'] = "success";
				$this->data['url'] = base_url('assets/public/avatar') . '/' . $data['file_name'];
				$this->data['msg'] = "Đổi ảnh cá nhân thành công!";
				$this->session->set_userdata(array('avatar' => $data['file_name']));
				$current_avatar_path = dirname(realpath(APPPATH)) . '/assets/public/avatar/' . $current_avatar;
				if (file_exists($current_avatar_path) && is_file($current_avatar_path) && $current_avatar != 'no-avatar.png') {
					unlink($current_avatar_path);
				}
			} else {
				unlink($data['full_path']);
				$this->data['status'] = "error";
				$this->data['msg'] = "Xảy ra lỗi khi lưu ảnh, hãy thử lại!";
			}
		}
		@unlink($_FILES[$file_element_name]);
		echo json_encode(array('status' => $this->data['status'], 'msg' => $this->data['msg'], 'src' => $this->data['url']));
	}
}