<?php namespace RESTful\Database\Migrations {

    /**
     * Class CreateKeysTable
     *
     * @package RESTful\Database\Migrations
     */
    class CreateKeysTable extends Migration
    {
        private $table;

        public function __construct()
        {
            parent::__construct();
            $this->table = $this->config->tables['keys'] ?? 'api_keys';
        }

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

                                       // TIMESTAMPS
                                       'created_on'     => [
                                           'type'    => 'datetime',
                                           'null'    => false,
                                           'default' => 0,
                                       ],
                                       'updated_on'     => [
                                           'type'    => 'datetime',
                                           'null'    => true,
                                           'default' => 0,
                                       ],
                                       'deleted_on'     => [
                                           'type'    => 'datetime',
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
