<?php namespace RESTful\Models {

    use CodeIgniter\Model;
    use RESTful\Entities\ApiLogs;

    /**
     * The LogsModel database model handles the delegation of data in
     * the `api_logs` table
     *
     * @package RESTful\Models
     */
    class LogsModel extends Model
    {
        protected $table         = 'api_logs';
        protected $primaryKey    = 'id';
        protected $returnType    = ApiLogs::class;
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $dateFormat    = 'datetime';
    }
}
