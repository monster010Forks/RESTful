<?php namespace RESTful\Config {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Config\BaseConfig;

    /**
     * Class RESTful
     *
     * @package RESTful\Config
     */
    class RESTful extends BaseConfig
    {
        /**
         * Allow only requests sent with the X-REQUESTED-WITH
         * header?
         *
         * @var bool $ajaxOnly
         */
        public $ajaxOnly = false;

        /**
         * Enable CORS?
         *
         * @var bool $enableCors
         */
        public $enableCors = false;

        /**
         * An array of domains allowed to make requests when $enableCors
         * is set to TRUE
         *
         * @var array $corsDomains
         */
        public $corsDomains = [
            'http://localhost/'
        ];

        /**
         * Authentication options are:

         * 'none'|null -> Disabled
         * 'digest'    -> Digest
         * 'basic'     -> Basic
         * 'jwt'       -> JWT
         *
         * @var string|null $authType
         */
        public $authType = 'none';

        /**
         * A 'username' => 'password' array to be used with 'basic'
         * authentication
         *
         * @var array
         */
        public $users = [
            'admin' => '12345678',
            'user'  => 'password'
        ];
    }
}
