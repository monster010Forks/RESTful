<?php namespace RESTful\Database\Migrations {

    use CodeIgniter\Database\Migration;

    /**
     * Class CreateLogsTable
     *
     * @package RESTful\Database\Migrations
     */
    class CreateLogsTable extends Migration
    {
        private $table = 'api_logs';

        public function up()
        {
            // Table structure for table 'api_users'
            $this->forge->addField([
                'id'            => [
                    'type'           => 'INT(11)',
                    'auto_increment' => true,
                    'unsigned'       => true,
                ],
                'api_key'       => [
                    'type' => 'VARCHAR(255)',
                ],
                'uri'           => [
                    'type' => 'VARCHAR(255)',
                ],
                'method'        => [
                    'type' => 'ENUM("get","post","options","put","patch","delete")',
                ],
                'params'        => [
                    'type' => 'TEXT',
                    'null' => true,
                ],
                'ip_address'    => [
                    'type' => 'VARCHAR(45)',
                ],
                'time'          => [
                    'type' => 'INT(11)',
                ],
                'rtime'         => [
                    'type' => 'FLOAT',
                    'null' => true,
                ],
                'authorized'    => [
                    'type' => 'VARCHAR(1)',
                ],
                'response_code' => [
                    'type'    => 'SMALLINT(3)',
                    'null'    => true,
                    'default' => 0,
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
