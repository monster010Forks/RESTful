<?php

/**
 * Language strings for HTTP responses.
 *
 * Use anywhere in the application as long as RESTful is PSR4
 * autoloaded in app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('HTTP.200') // PRODUCES: The resource requested has responded successfully
 *  - lang('HTTP.404') // PRODUCES: The resource requested does not exist
 *
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    '102' => 'The resource request is currently processing',
    '200' => 'The resource requested has responded successfully',
    '201' => 'The resource requested was created successfully',
    '204' => 'The resource requested was successful with no content returned',
    '301' => 'The resource requested has been permanently moved',
    '400' => 'The request made to this resource was not correct',
    '401' => 'You are unauthorized to view this resource',
    '402' => 'Payment is required before you may proceed',
    '403' => 'Access to this resource is explicitly forbidden',
    '404' => 'The resource requested does not exist',
    '409' => 'The resource requested could not continue due to a conflict',
    '500' => 'The server has experienced an unexpected error',
    '503' => 'The resource requested is currently unavailable',
];
