<?php namespace RESTful {

    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\Session\Session;
    use RESTful\Config\RESTful;

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
         * @var mixed $model
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
         * Config object
         *
         * @var \RESTful\Config\RESTful
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
            $app_helpers = ['RESTful\REST', 'RESTful\JWT'];

            // Merge $app_helpers with $this->helpers
            $helpers = array_merge($this->helpers, $app_helpers);

            // Load the application helper files
            helper($helpers);

            // Application configuration
            $this->session = session();
            $this->config  = config(RESTful::class, true);
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
