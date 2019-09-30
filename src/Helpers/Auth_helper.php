<?php

/**
 * This is a helper file for the Authentication service
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
if (!function_exists('auth_service')) {

    /**
     * Initiate the auth service
     *
     * @see \RESTful\Config\Services::auth()
     *
     * @param string $type       'none'|'basic'|'jwt'|null
     * @param bool $getShared    Retrieve a shared instance?
     *
     * @return mixed
     *
     */
    function auth_service(string $type = null, bool $getShared = false)
    {
        $config = config(\RESTful\Config\RESTful::class, false);
        return service('auth', $type ?? $config->authType, $getShared);
    }
}
