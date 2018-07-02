<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SITE_Controller extends MY_Controller {

	public $data = array();

	public function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('tieude_site');
	}

}