<?php namespace RESTful\Models {

    use RESTful\Entities\ApiLogs;
    use RESTful\Model;

    /**
     * The LogsModel database model handles the delegation of data in
     * the `api_logs` table
     *
     * @package RESTful\Models
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
