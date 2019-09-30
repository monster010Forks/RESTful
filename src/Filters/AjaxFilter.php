<?php namespace RESTful\Filters {

    // IMPORTS ----------------------------------------------------------------
    use CodeIgniter\Filters\FilterInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\HTTP\RequestInterface;

    /**
     * Class AjaxFilter
     *
     * A Filter class to handle AJAX requests
     *
     * @package RESTful\Filters
     */
    class AjaxFilter extends BaseFilter implements FilterInterface
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
            // If we only allow AJAX requests
            if ($this->config->ajaxOnly === true) {
                // Shared response service
                $response = \Config\Services::response();

                // Is the request valid AJAX?
                if ( ! $request->isAJAX()) {

                    // If not, generate the response
                    $response
                        ->setStatusCode(HTTP_BAD_REQUEST)
                        ->setJSON([ 'message' => 'Only valid AJAX requests are allowed' ])
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

        //--------------------------------------------------------------------
    }
}
