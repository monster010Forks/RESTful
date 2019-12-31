<?php namespace RESTful\Database\Migrations;

class CreateSessionsTable extends Migration
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->config->tables['sessions']?? 'api_sessions';

		$this->forge->addField([
			'id'         => [
				'type'       => 'VARCHAR',
				'constraint' => 128,
				'null'       => false
			],
			'ip_address' => [
				'type'       => 'VARCHAR',
				'constraint' => 45,
				'null'       => false
			],
			'timestamp'  => [
				'type'       => 'INT',
				'constraint' => 10,
				'unsigned'   => true,
				'null'       => false,
				'default'    => 0
			],
			'data'       => [
				'type'       => 'TEXT',
				'null'       => false,
				'default'    => ''
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addKey('timestamp');
		$this->forge->createTable($this->table, true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table, true);
	}
}
