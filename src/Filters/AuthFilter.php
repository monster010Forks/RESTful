<?php namespace RESTful\Filters {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Filters\FilterInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\HTTP\RequestInterface;

    /**
     * Class AuthFilter
     *
     * A Filter class to handle API authentication
     *
     * @package RESTful\Filters
     */
    class AuthFilter extends BaseFilter implements FilterInterface
    {
        /**
         * Before
         *
         * @param  RequestInterface $request
         *
         * @return mixed|void
         */
        public function before(RequestInterface $request)
        {
            // Load the auth helper
            helper('RESTful\Auth');
            $auth = auth_service();

            // If we have a configured auth type and are not authenticated
            if ($this->config->authType !== 'none' && !$auth->isAuthenticated()) {

                // Shared response service
                $response = \Config\Services::response();

                // If not, generate the response
                $response
                    ->setStatusCode(HTTP_UNAUTHORIZED)
                    ->setJSON([ 'message' => 'Unauthorized Access' ])
                    ->send();
                exit();
            }
        }

        //--------------------------------------------------------------------

        /**
         * After
         *
         * @param RequestInterface $request
         * @param ResponseInterface $response
         *
         * @return mixed|void
         */
        public function after(RequestInterface $request, ResponseInterface $response)
        {
            // Do something here
        }
    }
}
