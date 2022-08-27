<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UserModel extends Model {
        protected $table        =   'users';
        protected $primaryKey   =   'id';

        protected $returnType   =   'array';
        protected $userSoftDeletes   =   true;

        protected $allowedFields  =   ['name', 'email'];

        protected $useTimesTamps    = false;
        protected $createdFields    =   'created_at';
        protected $updatedFields    =   'updated_at';

        protected $validationRules  =   [];
        protected $validationMesages  =   [];
        protected $skipValidation   =   false;
    }
?>