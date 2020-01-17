<?php

/**
 * Cadenas de idiomas para la autenticación de la biblioteca.
 *
 *
 * Úselo en cualquier lugar de la aplicación siempre que RESTful sea PSR4
 * cargado automáticamente en la app/Config/Autoload.php
 *
 * USAR:
 *  - lang('Auth.userAlreadyExists') // PRODUCES: Esta cuenta de usuario ya existe
 *
 * @package  RESTful\Language
 *
 * @author   Jason Napolitano <jnapolitanoit@gmail.com>
 * @updated  Jan 16th, 2020
 * @link     https://github.com/jason-napolitano/restful
 */
return [
    'invalidPassword'   => 'La contraseña provista es incorrecta',
    'userAlreadyExists' => 'Esta cuenta de usuario ya existe',
    'userDoesNotExist'  => 'Esta cuenta de usuario no existe.',
    'emailIsNotValid'   => 'El correo electrónico proporcionado no es válido.',
];
