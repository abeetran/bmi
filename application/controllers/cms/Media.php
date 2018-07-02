<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Media extends CMS_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['subview'] = 'cms/media';
		$this->load->view('cms/_layout_main', $this->data);
	}
}