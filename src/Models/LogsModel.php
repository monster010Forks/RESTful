<?php namespace RESTful\Models {

    use RESTful\Entities\ApiLogs;
    use RESTful\Model;

    /**
     * The LogsModel database model handles the delegation of data in
     * the `api_logs` table
     *
     * @package RESTful\Models
     *
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @updated  Jan 16th, 2020
     */
    class LogsModel extends Model
    {
        protected $primaryKey    = 'id';
        protected $returnType    = ApiLogs::class;
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $dateFormat    = 'datetime';

        public function __construct()
        {
            parent::__construct();
            $this->table = $this->config->tables['logs']?? 'api_logs';
        }
    }
}
