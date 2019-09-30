<?php namespace RESTful\Libraries\JWT {

    use UnexpectedValueException;
    use DomainException;

    /**
     * Library for a JSON Web Token implementation based on the JWT Spec
     *
     * @category RESTful\Libraries\JWT
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @license  MIT
     *
     * Read about the JWT Specification Here
     * @link     https://tools.ietf.org/html/rfc7519
     */
    class JWT
    {
        /**
         * Returns the JWT's payload as a php object
         *
         * @param string      $jwt    The JWT
         * @param string|null $key    The secret key
         * @param bool        $verify Don't skip verification process
         *
         * @return object
         */
        public static function decode($jwt, $key = null, $verify = true)
        {
            $tks = explode('.', $jwt);
            if (count($tks) !== 3) {
                throw new UnexpectedValueException('Wrong number of segments');
            }
            [$headb64, $payloadb64, $cryptob64] = $tks;
            if (null === ($header = self::jsonDecode(self::urlSafeB64Decode($headb64)))
            ) {
                throw new UnexpectedValueException('Invalid segment encoding');
            }
            if (null === $payload = self::jsonDecode(self::urlSafeB64Decode($payloadb64))
            ) {
                throw new UnexpectedValueException('Invalid segment encoding');
            }
            $sig = self::urlSafeB64Decode($cryptob64);
            if ($verify) {
                if (empty($header->alg)) {
                    throw new DomainException('Empty algorithm');
                }
                if ($sig !== self::sign("$headb64.$payloadb64", $key, $header->alg)) {
                    throw new UnexpectedValueException('Signature verification failed');
                }
            }
            return $payload;
        }

        // --------------------------------------------------------------------

        /**
         * Returns a JWT
         *
         * @param object|array $payload   PHP object or array
         * @param string       $key       The secret key
         * @param string       $algorithm The signing algorithm
         *
         * @return string
         */
        public static function encode($payload, $key, $algorithm = null): string
        {
            $algo          = $algorithm ?? (new \GetSparked\Config\JWT())->algorithm;
            $header        = array('typ' => 'JWT', 'alg' => $algo);
            $segments      = array();
            $segments[]    = self::urlSafeB64Encode(self::jsonEncode($header));
            $segments[]    = self::urlSafeB64Encode(self::jsonEncode($payload));
            $signing_input = implode('.', $segments);
            $signature     = self::sign($signing_input, $key, $algo);
            $segments[]    = self::urlSafeB64Encode($signature);

            return implode('.', $segments);
        }

        // --------------------------------------------------------------------

        /**
         * Returns an encrypted message
         *
         * @param string $msg    The message to sign
         * @param string $key    The secret key
         * @param string $method The signing algorithm
         *
         * @return string
         */
        public static function sign($msg, $key, $method = null): string
        {
            $methods = array(
                'HS256' => 'sha256',
                'HS384' => 'sha384',
                'HS512' => 'sha512',
            );

            $algo = $method ?? (new \GetSparked\Config\JWT())->algorithm;
            if (empty($methods[$algo])) {
                throw new DomainException('Algorithm not supported');
            }
            return hash_hmac($methods[$algo], $msg, $key, true);
        }

        // --------------------------------------------------------------------

        /**
         * Returns an object representation of JSON string
         *
         * @param string $input JSON string
         *
         * @return object
         */
        public static function jsonDecode($input)
        {
            $obj = json_decode($input, true, 512, JSON_THROW_ON_ERROR);
            if (function_exists('json_last_error') && $errno = json_last_error()) {
                self::handleJsonError($errno);
            }
            else if ($obj === null && $input !== 'null') {
                throw new DomainException('Null result with non-null input');
            }
            return $obj;
        }

        // --------------------------------------------------------------------

        /**
         * Returns a JSON representation of a PHP object or array
         *
         * @param object|array $input A PHP object or array
         *
         * @return string
         */
        public static function jsonEncode($input): string
        {
            $json = json_encode($input, JSON_THROW_ON_ERROR, 512);
            if (function_exists('json_last_error') && $errno = json_last_error()) {
                self::handleJsonError($errno);
            }
            else if ($json === 'null' && $input !== null) {
                throw new DomainException('Null result with non-null input');
            }
            return $json;
        }

        // --------------------------------------------------------------------

        /**
         * Returns a decoded string
         *
         * @param string $input A base64 encoded string
         *
         * @return string
         */
        public static function urlSafeB64Decode($input): string
        {
            $remainder = strlen($input) % 4;
            if ($remainder) {
                $padlen = 4 - $remainder;
                $input .= str_repeat('=', $padlen);
            }
            return base64_decode(strtr($input, '-_', '+/'));
        }

        // --------------------------------------------------------------------

        /**
         * Returns a Base 64 encoded string
         *
         * @param string $input Anything really
         *
         * @return string
         */
        public static function urlSafeB64Encode($input): string
        {
            return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
        }

        // --------------------------------------------------------------------

        /**
         * Handle JSON errors
         *
         * @param int $errno An error number from json_last_error()
         *
         * @return void
         */
        private static function handleJsonError($errno): void
        {
            $messages = array(
                JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
                JSON_ERROR_CTRL_CHAR => 'Unexpected control character found',
                JSON_ERROR_SYNTAX => 'Syntax error, malformed JSON'
            );
            throw new DomainException($messages[$errno] ?? 'Unknown JSON error: ' . $errno
            );
        }
    }
}
