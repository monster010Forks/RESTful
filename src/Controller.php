<?php namespace RESTful {

    use App\Models\UserModel;
    use CodeIgniter\RESTful\ResourceController;
    use RESTful\Config\RESTful as DefaultConfig;
    use Config\RESTful as UserConfig;
    use CodeIgniter\Session\Session;

    /**
     * Class Controller
     *
     * @package RESTful
     */
    class Controller extends ResourceController
    {
        /**
         * An empty data array for view variables
         *
         * @var array $data
         */
        protected $data = [];

        /**
         * Database model object
         *
         * @var object $model
         */
        protected $model;

        /**
         * CodeIgniter Session library
         *
         * @see Session::class
         *
         * @var Session $session
         */
        protected $session;

        /**
         * Config object [User Defined Config or Default Module Config]. Based
         * on class_exists(). No need to modify this value
         *
         * @var UserConfig|DefaultConfig
         */
        public $config;

        // --------------------------------------------------------------------

        /**
         * Let's build some things by loading helpers, libraries and other
         * essential application components
         */
        public function __construct()
        {
            // Default application helpers
            $app_helpers = ['RESTful\REST', 'RESTful\JWT', 'RESTful\Auth'];

            // Merge $app_helpers with $this->helpers
            $helpers = array_merge($this->helpers, $app_helpers);

            // Load the application helper files
            helper($helpers);

            // Application configuration
            $this->session = session();

            // Select which config file to use
            class_exists(UserConfig::class)
                ? $configClass = UserConfig::class
                : $configClass = DefaultConfig::class; // Default Module Config

            // Load the correct shared config class
            $this->config = config($configClass, true);
        }

        // --------------------------------------------------------------------

        /**
         * Unset the $data array upon class destruction
         *
         * @see \RESTful\Controller::$data
         */
        public function __destruct()
        {
            // Unset $this->data
            unset($this->data);
        }
    }
}
