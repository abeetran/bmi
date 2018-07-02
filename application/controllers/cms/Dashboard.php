<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CMS_Controller {
	public function index(){
		// Load view
		$this->data['subview'] = 'cms/dashboard';
		$this->load->view('cms/_layout_main', $this->data);
	}
}
