<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->data['before_head'] = '';
		$this->data['before_foot'] = '';
        
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		$this->form_validation->set_message('required', ' %s không được để trống');
		$this->form_validation->set_message('alpha', ' %s chỉ được dùng kí tự thường');
		$this->form_validation->set_message('valid_email', ' %s phải đúng định dạng');
		$this->form_validation->set_message('min_length', ' %s phải lớn hơn %s kí tự');
		$this->form_validation->set_message('max_length', ' %s phải nhỏ hơn %s kí tự');
		$this->form_validation->set_message('matches', ' %s không trùng với %s');
	}

}