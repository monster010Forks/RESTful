# Synopsis
A REST based package for CodeIgniter 4 that aims to handle the basics of a REST based API, allowing users to easily 
manipulate their API's behavior by simply modifying the modules configuration options.
 - **IMPORTANT NOTE:** _This repo is under current development and is NOT YET READY FOR PRODUCTION USE_

# TOC (Table of contents) 
 - [Synopsis](#synopsis)
 - [Credits](#credits)
 - [Requirements](#requirements)
 - [Features](#features)
 - [Installation](#installation)
 - [Usage](#usage)
 - [License](#license)

# Credits
A huge thanks goes to these following developers and organizations. Without their hard work and dedication this package would not at all be possible.

|    DEVELOPER NAME    |                   LINK                    |
|----------------------|-------------------------------------------|
| CodeIgniter and BCIT | [Github](https://github.com/codeigniter4) |
|     Lonnie Ezell     | [Github](https://github.com/lonnieezell)  |

# Requirements
This module requires CodeIgniter 4 to be installed and configured and running on PHP >=7.4.0
   - [This page may help you get up and running if you're not already.](https://codeigniter4.github.io/userguide/installation/index.html)

# Features
The features included in this module are:  

 - **Bin/Config** _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/bin/Config)_
   - Default configuration files that you will copy to your projects `app/Config` directory for the modules
   configuration
 - **Controller** _[View Src File](https://github.com/jason-napolitano/RESTful/blob/master/src/Controller.php)_
   - A basic controller that extends the `ResourceController` and bakes in a little bit more
   functionality
   
 - **Filters** _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/src/Filters)_
   - The `AjaxFilter` acts on AJAX requests based upon the `$ajaxOnly` config 
   option
   - The `AuthFilter` handles the authentication for `Basic` and `JWT` authentication
   - The `CorsFilter` checks a few CORS configuration options and responds accordingly
  
 - **Helpers** _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/src/Helpers)_
   - A series of useful helper files are included as well. These include String Helpers, Array Helpers, Object Helpers, JWT Helpers, an 
   Auth Helper and more!
     - _The `\RESTful\REST`, `\RESTful\Auth` and `\RESTful\JWT` helpers are autoloaded when a controller class_ `extends \RESTful\Controller`  
       
  - **Language** _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/src/Language)_
    - Language files are included for easier module translation
  
 - **Libraries** _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/src/Libraries)_
   - JWT Library for encoding and decoding of JSON Web Tokens (JWT's)
     
 - **Services**: _[View Src Tree](https://github.com/jason-napolitano/RESTful/tree/master/src/Services)_
   - `RESTful\Services\Auth` contains authentication services which are called in the `AuthFilter` and can be called globally like so:
      - `$auth = \Config\Services::auth($type = 'none', $getShared = false); ` 
      - `$auth = service('auth', $type = 'none', $getShared = false); `
        - Types included are `'basic'`, `digest` or `'jwt'`
    
# Installation
_NOTE: Please make sure to [install and configure CodeIgniter 4](#requirements) before performing the installation_

 1. ## Require
 - Use composer to require the package:
 ```php
$ cd path/to/project/root
$ composer require jason-napolitano/restful
```
_You may also add this to your `composer.json` like so:_
```json
{
    "require": {
        "jason-napolitano/restful": "0.5"
    }
}
```
_Then run `$ composer update` in your projects `ROOTPATH`_

 2. ## Autoload
 - Add the following to the `$psr4` array in `app/Config/Autoload.php`:
```php
$psr4 = [
    // OTHER PSR-4 ENTRIES ...
    'RESTful' => ROOTPATH . 'vendor/jason-napolitano/restful/src',
]
```

 3. ## Configure
 - Move the contents of `bin/Config` to your projects `app/Config` and overwrite. You may also only merge the contents of `bin/Config/Filters.php` with your own if you've already got custom filters you don't want overwritten.
 
**OPTIONAL** 
 - Configure your applications database settings in your applications `.env` file. This is optional if you plan to use Digest Authentication (coming soon)
 - From your projects `ROOTPATH`, run the `php spark migrate:latest -all` command. This is optional in order to populate your database with the correct tables for authentication and sessions.

# Usage
 - Modify your newly moved `app/Config/RESTful.php` for the aforementioned features
   - _The documentation in the config file should be able to explain everything_
 - Modify your newly moved `app/Config/JWT.php` for the JWT library
   - _This file is needed for the JWT library configuration_
 - Modify your newly moved `app/Config/Filters.php` for the aforementioned filters
   - _You may also reference `bin/Config/Filters.php` and apply only what you'd like_

# License
MIT License

Copyright (c) 2020 Jason Napolitano

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
