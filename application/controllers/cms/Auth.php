<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CMS_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->data['site_name'] = 'BMI CMS - LOGIN SYSTEM';
	}
    
	public function index(){
        
	}
    
    public function login() {
		// Chuyển về trang chính cms khi đã đăng nhập thành công
		if (isset($this->session->userdata['name'])) {
			redirect('cms');
		}
		// Thiết lập biểu mẫu
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);

		// Frocess form
		if ($this->form_validation->run() == TRUE) {
			// Can login
			if ($this->user_m->login() == FALSE) {
				$this->session->set_flashdata('error', 'Email hoặc mật khẩu không đúng');
				redirect('cms/auth/login', 'refresh');
			} else {
				if ((int) $this->session->userdata['role'] == 0) {
					redirect('cms/dashboard');
				} else {
					redirect('cms');
				}
			}
		}

		// Load view
		$this->data['subview'] = 'cms/auth/login';
		$this->load->view('cms/_layout_login', $this->data);
	}

	public function logout() {
		$this->user_m->logout();
		redirect('cms/auth/login');
	}
}
