<?php

/**
 * Language strings for HTTP responses.
 *
 * Use anywhere in the application as long as RESTful is PSR4
 * autoloaded in app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('HTTP.200') // PRODUCES: The resource has responded successfully
 *  - lang('HTTP.404') // PRODUCES: The resource requested does not exist
 *
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    '102' => 'This request is currently processing',
    '200' => 'This request has responded successfully',
    '201' => 'This resource was created successfully',
    '204' => 'This request was successful with no content returned',
    '301' => 'This resource has been permanently moved',
    '400' => 'This request made to this resource was not correct',
    '401' => 'You are unauthorized to view this resource',
    '402' => 'Payment is required before you may proceed',
    '403' => 'Access to this resource is forbidden',
    '404' => 'The requested resource does not exist',
    '409' => 'The request could not continue due to a conflict',
    '500' => 'The server has experienced an unexpected error',
    '503' => 'The requested resource is currently unavailable',
];
