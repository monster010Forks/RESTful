<?php

/**
 * Language strings for the JWT library.
 *
 * Use anywhere in the application as long as RESTful is PSR4
 * autoloaded in app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('JWT.unknownJsonError') // PRODUCES: Unknown JSON error:
 *
 * @package  RESTful\Language
 *
 * @author   Jason Napolitano <jnapolitanoit@gmail.com>
 * @updated  Jan 16th, 2020
 * @link     https://github.com/jason-napolitano/restful
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
