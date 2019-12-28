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
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    // JWT Errors
    'wrongNumberOfSegments'           => 'Wrong number of segments',
    'invalidSegmentEncoding'          => 'Invalid segment encoding',
    'signatureVerificationFailed'     => 'Signature verification failed',
    'algorithmNotSupported'           => 'Algorithm not supported',
    'nullResultWithNonNullInput'      => 'Null result with non-null input',
    'emptyAlgorithm'                  => 'Empty algorithm',

    // JSON Error
    'maximumStackDepthExceeded'       => 'Maximum stack depth exceeded',
    'unexpectedControlCharacterFound' => 'Unexpected control character found',
    'syntaxErrorMalformedJson'        => 'Syntax error, malformed JSON',
    'unknownJsonError'                => 'Unknown JSON error: ',
];
