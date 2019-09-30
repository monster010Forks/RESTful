<?php namespace RESTful\Config {

    use RESTful\Services\Auth\DigestAuth;
    use RESTful\Services\Auth\BasicAuth;
    use CodeIgniter\Config\BaseService;
    use RESTful\Services\Auth\JWTAuth;

    /**
     * Class Services
     *
     * @package RESTful\Config
     */
    class Services extends BaseService
    {
        /**
         * Auth service
         *
         * @param string|null $type [options: basic|jwt|?none]
         *
         * @return BasicAuth|JWTAuth|null
         */
        public static function auth(?string $type = 'none')
        {
            switch ($type):
                case 'basic':
                    return new BasicAuth();
                    break;

                case 'jwt':
                    return new JWTAuth();
                    break;

                case 'none':
                case null:
                default:
                    return null;
                    break;

            endswitch;
        }
    }
}
