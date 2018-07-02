<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CMS_Controller extends MY_Controller {

	public $data = array();

	public function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('tieude_cms');
        $this->data['$pagegroup'] = 'overview';
        
		$this->load->model('user_m');
        
        // Kiểm tra đăng nhập
        // Điều hướng tất cả liên kết sang trang đăng nhập ( ngoại trừ 02 trang login và logout)
		$exception_uris = array('cms/auth/login','cms/auth/logout');
        
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				redirect('cms/auth/login');
			}
		}
	}

}