<?php

/**
 * Language strings for HTTP responses.
 *
 * Use anywhere in the application as long as RESTful is PSR4
 * autoloaded in app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('HTTP.200') // PRODUCES: The request has responded successfully
 *  - lang('HTTP.404') // PRODUCES: The requested resource does not exist
 *
 * @package  RESTful\Language
 *
 * @author   Jason Napolitano <jnapolitanoit@gmail.com>
 * @updated  Jan 16th, 2020
 * @link     https://github.com/jason-napolitano/restful
 */
return [
    '102' => 'The request is currently processing',
    '200' => 'The request has responded successfully',
    '201' => 'This resource was created successfully',
    '204' => 'The request was successful with no content returned',
    '301' => 'This resource has been permanently moved',
    '400' => 'The request made to this resource was not correct',
    '401' => 'You are unauthorized to view this resource',
    '402' => 'Payment is required before you may proceed',
    '403' => 'Access to this resource is forbidden',
    '404' => 'The requested resource does not exist',
    '409' => 'The request could not continue due to a conflict',
    '500' => 'The server has experienced an unexpected error',
    '503' => 'The requested resource is currently unavailable',
];
