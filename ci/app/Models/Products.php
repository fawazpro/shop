<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{
    // protected $DBGroup = 'group_name'; //Database Group to connect to

    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $returnType     = 'object'; // Or 'object'
    protected $useSoftDeletes = false;

    protected $allowedFields = ['product_name', 'product_code', 'product_price', 'product_image', 'product_description'];

    protected $useTimestamps = false; // This boolean value determines whether the current date is automatically added to all inserts and updates.

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
