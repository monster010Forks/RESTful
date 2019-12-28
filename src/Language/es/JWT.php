<?php

/**
 * Cadenas de idioma para la biblioteca JWT.
 *
 * Úselo en cualquier lugar de la aplicación siempre que RESTful sea PSR4
 * cargado automáticamente en la aplicación / Config / Autoload.php
 *
 * USAR:
 *  - lang('JWT.unknownJsonError') // PRODUCES: Error JSON desconocido:
 *
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    // JWT Errors
    'wrongNumberOfSegments'           => 'Número incorrecto de segmentos',
    'invalidSegmentEncoding'          => 'Codificación de segmento inválida',
    'signatureVerificationFailed'     => 'Verificación de firma fallida',
    'algorithmNotSupported'           => 'Algoritmo no soportado',
    'nullResultWithNonNullInput'      => 'Resultado nulo con entrada no nula',
    'emptyAlgorithm'                  => 'Algoritmo vacío',

    // JSON Error
    'maximumStackDepthExceeded'       => 'Profundidad máxima de la pila excedida',
    'unexpectedControlCharacterFound' => 'Se encontró un carácter de control inesperado',
    'syntaxErrorMalformedJson'        => 'Error de sintaxis, JSON con formato incorrecto',
    'unknownJsonError'                => 'Error JSON desconocido: ',
];
