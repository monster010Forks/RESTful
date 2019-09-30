<?php namespace RESTful\Services\Auth {

    /**
     * The main library class for 'jwt' authentication
     *
     * @package RESTful\Services\Auth
     */
    class JWTAuth implements AuthInterface
    {
        /**
         * Authenticate a user
         *
         * @param string $username
         * @param string $password
         *
         * @return void
         */
        public function authenticate(string $username = null, string $password = null): void
        {
            // TODO: Implement authenticate() method.
        }

        /**
         * Destroy a current session
         *
         * @return void
         */
        public function destroy(): void
        {
            // TODO: Implement destroy() method.
        }/**
     * Was a user successfully authenticated?
     *
     * @return bool
     * @var string $username
     *
     */
        public function isAuthenticated(string $username = null): bool
        {
            return false;
        }

        /**
         * Check if a user exists
         *
         * @param string $username
         *
         * @return bool
         */
        public function alreadyExists(string $username): bool
        {
            // TODO: Implement alreadyExists() method.
        }

        /**
         * Verify a username/password
         *
         * @param string $username
         * @param string $password
         *
         * @return bool
         */
        public function verifyCredentials(string $username, string $password): bool
        {
            // TODO: Implement verifyCredentials() method.
        }
    }
}
