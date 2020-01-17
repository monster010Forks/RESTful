<?php namespace RESTful {

    use CodeIgniter\Model as CodeIgniter;
    use Config\RESTful as UserConfig;
    use RESTful\Config\RESTful as DefaultConfig;

    /**
     * Class Model
     *
     * @package RESTful
     *
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @updated  Jan 16th, 2020
     */
    class Model extends CodeIgniter
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
    }
}
