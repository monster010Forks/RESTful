<?php namespace RESTful\Config {

    // IMPORT THE LIBRARIES FILTERS
    use RESTful\Filters\AjaxFilter;
    use RESTful\Filters\CorsFilter;
    use RESTful\Filters\AuthFilter;

    /**
     * Filter Configuration for the RESTful Module
     *
     * @package Config
     *
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @updated  Jan 16th, 2020
     */
    class Filters extends \CodeIgniter\Config\BaseConfig
    {
        /**
         * Makes reading things below nicer, and simpler to change
         * out scripts that are used.
         *
         * @var array $aliases
         */
        public $aliases = [
            'auth' => AuthFilter::class,
            'cors' => CorsFilter::class,
            'ajax' => AjaxFilter::class,
        ];

        /**
         * Always applied before every request
         *
         * @var array $globals
         */
        public $globals = [
            'before' => [
                'auth',
                'cors',
                'ajax',
            ],
            'after'  => [
                // ...
            ],
        ];

        /**
         * Works on all of a particular HTTP method
         * (GET, POST, etc) as BEFORE filters only
         *     like: 'post' => ['CSRF', 'throttle'],
         *
         * @var array $methods
         */
        public $methods = [
            // ...
        ];

        /**
         * List filter aliases and any before/after uri patterns
         * that they should run on, like:
         *    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
         *
         * @var array $filters
         */
        public $filters = [
            // ...
        ];
    }
}
