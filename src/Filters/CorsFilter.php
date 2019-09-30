<?php namespace RESTful\Filters {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Filters\FilterInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\HTTP\RequestInterface;

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
