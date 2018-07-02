<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Migration_Create_categories extends CI_Migration {

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
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '225',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '225',
			),
			'position' => array(
				'type' => 'INT',
				'constraint' => 11,
				'default' => 0,
			),
			'parent_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'default' => 0,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('categories');
        // Dumping data for table 'users'
		$data = array(
			'id' => '1',
			'title' => 'Category 1',
			'slug' => 'category-1',
			'position' => '0',
			'parent_id' => '0',
		);
		$this->db->insert('categories', $data);
	}

	public function down() {
		$this->dbforge->drop_table('categories');
	}

}