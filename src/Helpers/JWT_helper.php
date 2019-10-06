<?php

/**
 * This is a helper file the JWT library
 *
 * @package  RESTful\Helpers
 * @author   Jason Napolitano <jnapolitanoit@gmail.com>
 * @updated  09.21.2019
 *
 * @license  MIT License
 *
 * @link     https://codeigniter4.github.io/CodeIgniter4/general/helpers.html
 * @link     https://opensource.org/licenses/MIT
 */

// ----------------------------------------------------------------------------
// If the function does not exist, let's create it!
if (!function_exists('jwt_encode')) {
    /**
     * Encode a JWT
     *
     * @param mixed  $payload
     * @param string $secretKey
     *
     * @return string
     */
    function jwt_encode($payload, string $secretKey = null)
    {
        $config = class_exists(\Config\JWT::class)? new \Config\JWT(): new \RESTful\Config\JWT();
        return (new \RESTful\Libraries\JWT\JWT())::encode($payload, $secretKey ?? $config->secretKey);
    }
}

// ----------------------------------------------------------------------------
// If the function does not exist, let's create it!
if (!function_exists('jwt_decode')) {
    /**
     * Decode a JWT
     *
     * @param string $jwtString
     * @param string $secretKey
     *
     * @return object
     */
    function jwt_decode(string $jwtString, string $secretKey)
    {
        return (new \RESTful\Libraries\JWT\JWT())::decode($jwtString, $secretKey);
    }
}

// ----------------------------------------------------------------------------
// If the function does not exist, let's create it!
