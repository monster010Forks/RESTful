<?php namespace RESTful\Database\Migrations {

    use CodeIgniter\Database\Migration;

    /**
     * Class CreateKeysTable
     *
     * @package RESTful\Database\Migrations
     */
    class CreateKeysTable extends Migration
    {
        private $table = 'api_keys';

        public function up()
        {
            // Table structure for table 'api_users'
            $this->forge->addField([
                'id'             => [
                    'type'           => 'INT(11)',
                    'auto_increment' => true,
                    'unsigned'       => true,
                ],
                'user_id'        => [
                    'type'     => 'INT(11)',
                    'unsigned' => true,
                ],
                'key'            => [
                    'type'   => 'VARCHAR(255)',
                    'unique' => true,
                ],
                'level'          => [
                    'type' => 'INT(2)',
                ],
                'ignore_limits'  => [
                    'type'    => 'TINYINT(1)',
                    'default' => 0,
                ],
                'is_private_key' => [
                    'type'    => 'TINYINT(1)',
                    'default' => 0,
                ],
                'ip_addresses'   => [
                    'type' => 'TEXT',
                    'null' => true,
                ],
                'date_created'   => [
                    'type' => 'INT(11)',
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
