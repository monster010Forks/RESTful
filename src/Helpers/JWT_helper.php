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
     * @param $payload
     * @param $secretKey
     *
     * @return string
     */
    function jwt_encode($payload, $secretKey) {
        return (new \RESTful\Libraries\JWT\JWT())::encode($payload, $secretKey);
    }
}

// ----------------------------------------------------------------------------
// If the function does not exist, let's create it!
if (!function_exists('jwt_decode')) {
    /**
     * Decode a JWT
     *
     * @param $jwtString
     * @param $secretKey
     *
     * @return object
     */
    function jwt_decode($jwtString, $secretKey)
    {
        return (new \RESTful\Libraries\JWT\JWT())::decode($jwtString, $secretKey);
    }
}
