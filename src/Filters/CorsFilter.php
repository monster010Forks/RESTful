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
            $domains   = $this->config->corsDomains;
            // Shared response service
            $response  = Services::response();

            // Configuring the 'Access-Control-Allow-Origin' header
            if ($this->config->enableCors === false) {
                // Set the Access-Control-Allow-Origin header to all (*)
                $response->setHeader('Access-Control-Allow-Origin', '*');
                $allow_all = true;

            } else {
                // Localhost
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
                // TODO - Allow only hosts within CORS list in config
                $domains = (string)$response->getHeader('Access-Control-Allow-Origin')->getValue();
                $http_host = 'http://' . $request->getServer('HTTP_HOST');
                $is_allowed = strpos($domains, $http_host) !== false;

                if ( ! $is_allowed) {
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
