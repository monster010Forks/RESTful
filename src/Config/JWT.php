<?php namespace RESTful\Config;

/**
 * JWT Library configuration class
 *
 * @package RESTful\Config
 */
class JWT
{
    /**
     * Library-wide secret key
     *
     * @var string $secretKey
     */
    public $secretKey = 'super-secret-key';

    /**
     * Library-wide hashing algorithm
     *
     * @var string $algorithm
     */
    public $algorithm = 'HS256';
}