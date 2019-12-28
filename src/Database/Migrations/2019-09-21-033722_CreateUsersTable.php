<?php namespace RESTful\Database\Migrations {

    use CodeIgniter\Database\Migration;

    /**
     * Class CreateUsersTable
     *
     * @package RESTful\Database\Migrations
     */
    class CreateUsersTable extends Migration
    {
        private $table = 'api_users';

        public function up()
        {
            // Table structure for table 'api_users'
            $this->forge->addField([
                'id' => [
                    'type'           => 'MEDIUMINT',
                    'constraint'     => '8',
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'ip_address' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '45',
                ],
                'username' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                ],
                'password' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '80',
                ],
                'email' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '254',
                    'unique'     => true,
                ],
                'created_on' => [
                    'type'       => 'INT',
                    'constraint' => 10,
                    'unsigned'   => true,
                    'null'       => false,
                    'default'    => 0
                ],
                'updated_on' => [
                    'type'       => 'INT',
                    'constraint' => 10,
                    'unsigned'   => true,
                    'null'       => false,
                    'default'    => 0
                ],
                'deleted_on' => [
                    'type'       => 'INT',
                    'constraint' => 10,
                    'unsigned'   => true,
                    'null'       => false,
                    'default'    => 0
                ],
                'is_deleted' => [
                    'type'       => 'TINYINT',
                    'constraint' => '1',
                    'null'       => true,
                    'unsigned'   => true,
                    'default'    => null,
                ],
                'last_login' => [
                    'type'       => 'INT',
                    'constraint' => '11',
                    'unsigned'   => true,
                    'null'       => true,
                ],
                'active' => [
                    'type'       => 'TINYINT',
                    'constraint' => '1',
                    'unsigned'   => true,
                    'null'       => true,
                ],
                'first_name' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '50',
                    'null'       => true,
                ],
                'last_name' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '50',
                    'null'       => true,
                ],
                'phone' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '20',
                    'null'       => true,
                ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable($this->table, false);
        }

        //--------------------------------------------------------------------

        public function down()
        {
            $this->forge->dropTable($this->table, true);
        }
    }
}
