# Introducing RESTful!
A REST based package for CodeIgniter 4. 

_UNDER CURRENT DEVELOPMENT. NOT READY FOR PRODUCTION USE!_

# Synopsis
A REST based package for CodeIgniter 4 that aims to handle the basics of a REST based API, allowing users to easily 
manipulate their API's behavior by simply modifying the modules configuration options.

# TOC (Table of contents) 
 - Synopsis
 - Credits
 - Requirements
 - Features
 - Installation
 - Usage
 - License

# Credits
|    DEVELOPER NAME    |  LINK  |
|----------------------|--------|
| CodeIgniter and BCIT | Github |
|     Lonnie Ezell     | Github |

# Requirements
This module only requires CodeIgniter 4 to be installed and configured
   - This page may help you get up and running if you're not already.

# Features
Included features are:  

 - **Bin/Config**
   - Default configuration files that you may copy to your projects `app/Config` directory for the modules
   configuration
 - **Controller**
   - A basic controller that extends the `ResourceController` and bakes in a little bit more
   functionality
   
 - **Filters**
   - The `AjaxFilter` acts on AJAX requests based upon the `$ajaxOnly` config 
   option
   - The `AuthFilter` handles the authentication for `Basic` and `JWT` authentication
   - The `CorsFilter` checks a few CORS configuration options and responds accordingly
  
 - **Helper**
   - A useful helper file is included as well. This file can help with tasks such as JWT decoding/encoding, trimming arrays, moving files and more!
     - _This helper is autoloaded when a controller class_ `extends \RESTful\Controller`  
       
  - **Language**
    - Language files are included for easier module translation
  
 - **Libraries**
   - JWT Library for encoding and decoding of JSON Web Tokens (JWT's)
     
 - **Services**:
   - `RESTful\Services\Auth` are authentication services which are called in the `AuthFilter` and can be called globally like so:
      - `$auth = \Config\Services::auth($type = 'none', $getShared = false); ` 
      - `$auth = service('auth', $type = 'none', $getShared = false); `
        - Types included are `'basic'`, `'jwt'`, `'none'`/`null`
    
# Installation

## Require
 ```php
$ cd path/to/project/root
$ composer require jason-napolitano/restful
```

## Autoload
```php
$psr4 = [
    // OTHER ENTIRES ...
    'RESTful' => ROOTPATH . 'vendor/jason-napolitano/restful/src',
]
```

## Configure
 - Move the `bin/Config/RESTful.php` file to your projects `app/Config` directory
 - Move the `bin/Config/Filters.php` file to your projects `app/Config` directory
 - Configure your applications database settings in your applications `.env` file
 - From your projects `ROOTPATH`, run the `php spark migrate:latest -all` command

# Usage
 - Modify your newly moved `app/Config/RESTful.php` for the aforementioned features
   - _The documentation in the config file should be able to explain everything_
 - Modify your newly moved `app/Config/Filters.php` for the aforementioned filters
   - _You may also reference `bin/Config/Filters.php` and apply only what you'd like_

# License
MIT License

Copyright (c) 2019 Jason Napolitano

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
