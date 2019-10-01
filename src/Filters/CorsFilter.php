<?php namespace RESTful\Filters {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Filters\FilterInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\HTTP\RequestInterface;
    use Config\Services;

    /**
     * Class CorsFilter
     *
     * A Filter class to handle CORS requests
     *
     * @package RESTful\Filters
     */
    class CorsFilter extends BaseFilter implements FilterInterface
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
            // Domains within the config
            $domains  = $this->config->corsDomains;
            // Shared response service
            $response = Services::response();

            // Configuring the 'Access-Control-Allow-Origin' header
            if ($this->config->enableCors === false) {

                // Set the Access-Control-Allow-Origin header to all (*)
                $response->setHeader('Access-Control-Allow-Origin', '*');
                $allow_all = true;
            } else {
                // Localhost array
                $localhosts = [
                    'http://localhost',
                    '127.0.0.1'
                ];
                // Merge the config arrays
                $merged_config = array_merge($domains, $localhosts);

                // Get a string of merged array keys for $response->setHeader()
                $these_domains = implode(', ', $merged_config);

                // Set the Access-Control-Allow-Origin header to $these_domains
                $response->setHeader('Access-Control-Allow-Origin', $these_domains);
                $allow_all = false;
            }

            // Handle the allowance of hosts when cors is enabled
            if ($allow_all === false) {
                // Get the 'Access-Control-Allow-Origin' value as a string
                $domains = (string)$response->getHeader('Access-Control-Allow-Origin')->getValue();

                // Get the $_SERVER['HTTP_HOST']
                $http_host = 'http://' . $request->getServer('HTTP_HOST');

                // If the $_SERVER['HTTP_HOST'] is found within the config, return true and false otherwise
                $is_allowed = strpos($domains, $http_host) !== false;

                // If we are not allowed
                if ( ! $is_allowed) {
                    // Send the response and exit()
                    $response
                        ->setStatusCode(HTTP_UNAUTHORIZED)
                        ->setJSON([
                            'message' => 'Requests from this host are not allowed',
                            'status'  => HTTP_UNAUTHORIZED
                        ])
                        ->send();
                        exit();
                }
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
