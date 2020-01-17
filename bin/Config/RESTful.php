<?php namespace Config {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Config\BaseConfig;

    /**
     * Class RESTful
     *
     * @package Config
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
         * Enable CORS?
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
         * Allowed methods
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
         * Authentication options are:
         * 'none'  -> Disabled
         * 'basic' -> Basic
         * 'jwt'   -> JWT
         *
         * @var string|null $authType
         */
        public string $authType = 'none';

        /**
         * A 'username' => 'password' array to be used with 'basic'
         * authentication
         *
         * @var array
         */
        public array $users = [
            'admin' => '12345678',
            'user'  => 'password',
        ];

        /**
         * Database tables for the RESTful module
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
