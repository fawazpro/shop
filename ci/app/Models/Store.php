<?php

namespace App\Models;

use CodeIgniter\Model;

class Store extends Model
{
    // protected $DBGroup = 'group_name'; //Database Group to connect to

    protected $table      = 'store';
    protected $primaryKey = 'store_name';

    protected $returnType     = 'object'; // Or 'object'
    protected $useSoftDeletes = false;

    protected $allowedFields = ['store_description', 'store_logo', 'store_banner', 'store-banner_desc', 'store_color'];

    protected $useTimestamps = false; // This boolean value determines whether the current date is automatically added to all inserts and updates.

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
