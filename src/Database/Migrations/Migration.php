<?php namespace RESTful\Database\Migrations {

    use CodeIgniter\Database\Migration as CodeIgniter;
    use RESTful\Config\RESTful as DefaultConfig;
    use Config\RESTful as UserConfig;

    /**
     * Class BaseMigration
     *
     * @package RESTful\Database\Migrations
     */
    class Migration extends CodeIgniter
    {
        /**
         * Config object
         *
         * @var mixed $config
         */
        protected $config;

        public function __construct()
        {
            parent::__construct();

            // Select which config file to use
            class_exists(UserConfig::class)
                ? $configClass = UserConfig::class
                : $configClass = DefaultConfig::class; // Default Module Config

            // Load the correct shared config class
            $this->config = config($configClass, true);
        }

        /**
         * Perform a migration step.
         */
        public function up() { }

        /**
         * Revert a migration step.
         */
        public function down() { }
    }
}
