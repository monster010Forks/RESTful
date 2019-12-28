<?php

/**
 * Cadenas de idioma para respuestas HTTP.
 *
 * Úselo en cualquier lugar de la aplicación siempre que RESTful sea PSR4
 * autoload en app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('HTTP.200') // RESULTADO: The resource requested has responded successfully
 *  - lang('HTTP.404') // RESULTADO: The resource requested does not exist
 *
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    '102' => 'La solicitud de recursos se está procesando actualmente',
    '200' => 'El recurso solicitado ha respondido con éxito.',
    '201' => 'El recurso solicitado fue creado exitosamente',
    '204' => 'El recurso solicitado fue exitoso sin contenido devuelto',
    '301' => 'El recurso solicitado se ha movido permanentemente.',
    '400' => 'La solicitud realizada a este recurso no era correcta.',
    '401' => 'No está autorizado para ver este recurso',
    '402' => 'Se requiere el pago antes de continuar',
    '403' => 'El acceso a este recurso está explícitamente prohibido',
    '404' => 'El recurso solicitado no existe.',
    '409' => 'El recurso solicitado no pudo continuar debido a un conflicto',
    '500' => 'El servidor ha experimentado un error inesperado.',
    '503' => 'El recurso solicitado no está disponible actualmente',
];
