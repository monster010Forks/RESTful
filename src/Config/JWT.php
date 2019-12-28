<?php namespace RESTful\Config;

/**
 * JWT Library configuration class. These config values are
 * used library-wide.
 *
 * @package RESTful\Config
 */
class JWT
{
    /**
     * Library-wide secret key. This is used for encoding
     * all JWT's (unless explicitly different) and will be
     * required to decode the JWT as well
     *
     * @var string $secretKey
     */
    public $secretKey = 'super-secret-key';

    /**
     * Library-wide hashing algorithm. This is the default
     * hashing algorithm. There is no real need to change this
     * value unless absolutely required.
     *
     * OPTIONS:
     *  -
     *
     * @var string $algorithm
     */
    public $algorithm = 'HS256';
}
