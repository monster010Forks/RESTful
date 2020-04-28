<?php namespace RESTful\Config {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Config\BaseConfig;

    /**
     * RESTful Library Class - The main class file for the RESTful libraries
     * configuration.
     *
     * @package RESTful\Config
     *
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @updated  Jan 16th, 2020
     */
    class RESTful extends BaseConfig
    {
        /**
         * Allow only requests sent with the X-REQUESTED-WITH
         * header?
         *
         * @var bool $ajaxOnly
         */
        public bool $ajaxOnly = false;

        /**
         * Do we want to do a CORS check? If set to true, only
         * hosts that are inside of the $corsDomains array will
         * be allowed to make requests
         *
         * @var bool $enableCors
         */
        public bool $enableCors = false;

        /**
         * An array of domains allowed to make requests when $enableCors
         * is set to TRUE
         *
         * @var array $corsDomains
         */
        public array $corsDomains = [
            'http://localhost/',
        ];

        /**
         * Allowed methods - Only the following types of request
         * methods will be allowed
         *
         * @var array $allowedMethods
         */
        public array $allowedMethods = [
            'GET',
            'POST',
            'OPTIONS',
            'PUT',
            'DELETE',
        ];

        /**
         * API Authentication type. Which type of authentication would 
         * you like to use?
         *
         * Authentication options are:
         * 'none'  -> Disabled
         * 'basic' -> Basic
         * 'jwt'   -> JWT
         *
         * @var string|null $authType
         */
        public string $authType = 'none';

        /**
         * A 'username' => 'password' array to be used if the
         * above $authType variable is set to 'basic'
         *
         * @var array
         */
        public array $users = [
            'admin' => '12345678',
            'user'  => 'password',
        ];

        /**
         * Database tables for the RESTful library
         *
         * @var array $tables
         */
        public array $tables = [
            'sessions' => 'api_sessions',
            'users'    => 'api_users',
            'keys'     => 'api_keys',
            'logs'     => 'api_logs',
        ];

    }
}
