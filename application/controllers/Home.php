<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SITE_Controller {
	public function index(){
		$this->load->view('site/home', $this->data);
	}
}
