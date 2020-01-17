<?php namespace RESTful\Models {

    use RESTful\Entities\ApiKeys;
    use RESTful\Model;

    /**
     * The KeysModel database model handles the delegation of data in
     * the `api_keys` table
     *
     * @package RESTful\Models
     *
     * @author   Jason Napolitano <jnapolitanoit@gmail.com>
     * @updated  Jan 16th, 2020
     */
    class KeysModel extends Model
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
            $this->table = $this->config->tables['keys']?? 'api_keys';
        }
    }
}
