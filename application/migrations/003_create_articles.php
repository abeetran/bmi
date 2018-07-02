<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Migration_Create_articles extends CI_Migration {

	public function __construct() {
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsinged' => TRUE,
				'auto_increment' => TRUE,
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'pubdate' => array(
				'type' => 'DATE',
			),
			'content' => array(
				'type' => 'TEXT',
			),
			'cat_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 11,
			),
			'thumbnail' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'default' => 'no-thumbnail.png',
			),
			'hit_counter' => array(
				'type' => 'INT',
				'constraint' => 11,
				'default' => 0,
			),
			'created' => array(
				'type' => 'DATETIME',
			),
			'modified' => array(
				'type' => 'DATETIME',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('articles');
        // Dumping data for table 'users'
		$data = array(
			'id' => '1',
			'title' => 'Article 1',
			'slug' => 'article-1',
			'pubdate' => '2016-01-01 00:00:00',
			'content' => '<p>Lorem ipsum dolor sit amet, te dictas causae elaboraret eum, has mazim latine feugait te. Eam et elit delicata disputationi, has in doctus intellegebat. Dolorem scriptorem an eum, lorem nullam copiosae cu vix. Quem modus aliquando pro ea, vis eu quod legendos, veniam primis nostrum has ne.</p>

<p>Usu prompta mediocrem ex. Id mentitum rationibus quaerendum duo, vix persius phaedrum cu. Per ne clita sanctus officiis. Putant laboramus nam cu.</p>

<p>His ea erant scriptorem complectitur, cum at oporteat molestiae expetendis. Iusto postea essent sit ut. Equidem conceptam ne qui, te has noluisse definitiones. Ius et justo persequeris, cum at mucius necessitatibus. Quem aeque dissentiunt an ius, sea percipit oporteat ea, ius an alii vivendo philosophia.</p>

<p>Vel ad vidit nonumes. Vim voluptua salutatus eu, mei eligendi detraxit pertinax cu, accusam platonem ad mei. Dicunt omnium equidem et eam, at percipit liberavisse usu, ex perfecto principes sed. Fugit expetenda conceptam id mel, ne sit discere persequeris, qui soleat verterem an. No lobortis indoctum consulatu nec, mel ut oratio efficiendi. Nam illud utamur ne, nec invidunt mandamus te.</p>

<p>Meis tamquam moderatius eum ex, ullum tamquam reprimique duo in. In imperdiet quaerendum pro. Pro platonem incorrupte cu, probo possit imperdiet id vis. Mea convenire partiendo liberavisse ei, ad aperiri convenire his. Mazim mandamus duo ea, nobis partiendo imperdiet in quo.</p>',
			'cat_id' => '1',
			'user_id' => '1',
			'thumbnail' => 'no-thumbnail.png',
			'hit_counter' => '0',
			'created' => '2016-01-01 00:00:00',
			'modified' => '2016-01-01 00:00:00',
		);
		$this->db->insert('articles', $data);
	}

	public function down() {
		$this->dbforge->drop_table('articles');
	}

}