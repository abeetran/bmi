<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class User_m extends MY_Model {

	protected $_table_name = 'users';
	protected $_order_by = 'id';
	public $rules = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|xss_clean|min_length[5]|max_length[60]',
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Mật khẩu',
			'rules' => 'trim|required',
		),
	);
	public $rules_register = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Tên người dùng',
			'rules' => 'trim|required|xss_clean|min_length[3]|max_length[20]|alpha|callback__unique_username',
		),
		'fullname' => array(
			'field' => 'fullname',
			'label' => 'Tên đầy đủ',
			'rules' => 'trim|required|xss_clean|min_length[3]|max_length[50]',
		),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|xss_clean|min_length[5]|max_length[60]|callback__unique_email',
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Mật khẩu',
			'rules' => 'trim|matches[password_confirm]',
		),
		'password_confirm' => array(
			'field' => 'password_confirm',
			'label' => 'Xác nhận mật khẩu',
			'rules' => 'trim|matches[password]',
		),
	);
	public $rules_add_user = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Tên người dùng',
			'rules' => 'trim|required|xss_clean|min_length[3]|max_length[20]|alpha|callback__unique_username',
		),
		'fullname' => array(
			'field' => 'fullname',
			'label' => 'Tên đầy đủ',
			'rules' => 'trim|required|xss_clean|min_length[3]|max_length[50]',
		),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|xss_clean|min_length[5]|max_length[60]|callback__unique_email',
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Mật khẩu',
			'rules' => 'trim|matches[password_confirm]',
		),
		'password_confirm' => array(
			'field' => 'password_confirm',
			'label' => 'Xác nhận mật khẩu',
			'rules' => 'trim|matches[password]',
		),
		'role' => array(
			'field' => 'role',
			'label' => 'Nhóm thành viên',
			'rules' => 'trim|required|integer|exact_length[1]',
		),
	);

	public $rules_change_password = array(
		'current_password' => array(
			'field' => 'current_password',
			'label' => 'Mật khẩu cũ',
			'rules' => 'trim|required',
		),
		'new_password' => array(
			'field' => 'new_password',
			'label' => 'Mật khẩu mới',
			'rules' => 'trim|required|min_length[6]',
		),
	);
    
	public $rules_change_fullname = array(
		'fullname' => array(
			'field' => 'fullname',
			'label' => 'Tên đầy đủ',
			'rules' => 'trim|required|xss_clean|min_length[3]|max_length[50]',
		),
	);

	public function __construct() {
		parent::__construct();
	}

	public function register() {
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'fullname' => $this->input->post('fullname'),
			'password' => $this->hash($this->input->post('password')),
			'regdate' => date('Y-m-d H:i:s'),
		);

		if ($data) {
			if ($this->db->set($data)->insert($this->_table_name)) {
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	public function login() {
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
		), TRUE);

		if (count($user)) {
			// Login user
			$data = array(
				'name' => $user->name,
				'fullname' => $user->fullname,
				'email' => $user->email,
				'id' => $user->id,
				'role' => $user->role,
				'avatar' => $user->avatar,
				'regdate' => $user->regdate,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
			return TRUE;
		}
		return FALSE;
	}

	public function logout() {
		$this->session->sess_destroy();
	}

	public function loggedin() {
		return (bool) $this->session->userdata('loggedin');
	}

	public function get_new() {
		$user = new stdClass();
		$user->name = '';
		$user->fullname = '';
		$user->email = '';
		$user->role = '';
		$user->password = '';
		return $user;
	}

	public function hash($string) {
		return hash('sha1', $string . config_item('encryption_key'));
	}

	public function save($data, $uid = NULL) {
		return parent::save($data, $uid);
	}
}