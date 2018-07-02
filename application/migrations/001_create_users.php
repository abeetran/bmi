<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Migration_Create_users extends CI_Migration {

	public function __construct() {
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'fullname' => array(
				'type' => 'VARCHAR',
				'constraint' => '60',
				'null' => TRUE,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'role' => array(
				'type' => 'INT',
				'constraint' => 1,
				'default' => 0,
			),
			'avatar' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => 'no-avatar.png',
			),
			'regdate' => array(
				'type' => 'DATETIME',
			),
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
        
        // Dumping data for table 'users'
		$data = array(
			'id' => '1',
			'name' => 'abeetran',
			'fullname' => 'Abee Tran Kim Trong Luyen',
			'email' => 'abeetran@gmail.com',
			'password' => 'cad3e72ade841d1a66790c5a0606ff46bb724707',
			'role' => '0',
			'avatar' => 'no-avatar.png',
			'regdate' => '2016-01-01 00:00:00',
		);
		$this->db->insert('users', $data);
	}

	public function down() {
		$this->dbforge->drop_table('users');
	}

}