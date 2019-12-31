<?php namespace RESTful\Models {

    use RESTful\Entities\ApiKeys;
    use RESTful\Model;

    /**
     * The UsersModel database model handles the delegation of data in
     * the `api_users` table
     *
     * @package RESTful\Models
     */
    class UsersModel extends Model
    {
        protected $primaryKey    = 'id';
        protected $returnType    = ApiKeys::class;
        protected $useTimestamps = true;
        protected $createdField  = 'created_on';
        protected $updatedField  = 'updated_on';
        protected $dateFormat    = 'datetime';

        public function __construct()
        {
            parent::__construct();
            $this->table = $this->config->tables['users']?? 'api_users';
        }
    }
}
