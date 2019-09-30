<?php namespace RESTful\Filters {

    /**
     * Class BaseFilter
     *
     * A base filter class that loads and instantiates the modules
     * configuration for any subsequent filter classes that extend
     * this base class.
     *
     * @package RESTful\Filters
     */
    class BaseFilter
    {
        /**
         * Configuration object
         *
         * @var RESTful $config
         */
        protected $config;

        //--------------------------------------------------------------------

        /**
         * The BaseFilter constructor loads a shared instance of the RESTful
         * modules configuration class.
         */
        public function __construct()
        {
            // Select which config file to use
            class_exists(\Config\RESTful::class)
                ? $configClass = \Config\RESTful::class          // Modules Config
                : $configClass = \RESTful\Config\RESTful::class; // Default config

            // Load the correct shared config class
            $this->config = config($configClass, true);
        }
    }
}
