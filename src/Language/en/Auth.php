<?php

/**
 * Language strings for library authentication.
 *
 * Use anywhere in the application as long as RESTful is PSR4
 * autoloaded in app/Config/Autoload.php
 *
 * USAGE:
 *  - lang('Auth.invalidPassword')   // PRODUCES: The password provided is incorrect
 *  - lang('Auth.userAlreadyExists') // PRODUCES: This user account already exists
 *
 * @package      RESTful
 * @author       Jason Napolitano
 * @link         https://github.com/jason-napolitano/restful
 */
return [
    'invalidPassword'   => 'The password provided is incorrect',
    'userAlreadyExists' => 'This user account already exists',
    'userDoesNotExist'  => 'This user account does not exist',
    'emailIsNotValid'   => 'The email provided is not valid',
];
