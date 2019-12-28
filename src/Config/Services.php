<?php namespace RESTful\Config {

    use CodeIgniter\Config\BaseService;

    /**
     * Services Class
     *
     * @package RESTful\Config
     */
    class Services extends BaseService
    {
        /**
         * A JWT service method
         *
         * @param bool $getShared
         *
         * @return \RESTful\Libraries\JWT\JWT
         */
        public static function jwt(bool $getShared = true)
        {
            if ($getShared) {
                return static::getSharedInstance('jwt');
            }

            return new \RESTful\Libraries\JWT\JWT();
        }
    }

}
