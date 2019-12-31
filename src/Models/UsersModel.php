<?php namespace RESTful\Models {

    use CodeIgniter\Model;
    use RESTful\Entities\ApiKeys;

    /**
     * The UsersModel database model handles the delegation of data in
     * the `api_users` table
     *
     * @package RESTful\Models
     */
    class UsersModel extends Model
    {
        protected $table         = 'api_keys';
        protected $primaryKey    = 'id';
        protected $returnType    = ApiKeys::class;
        protected $useTimestamps = true;
        protected $createdField  = 'created_on';
        protected $updatedField  = 'updated_on';
        protected $dateFormat    = 'datetime';
    }
}
