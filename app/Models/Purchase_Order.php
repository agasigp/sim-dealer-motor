<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'purchase_order';
    public $timestamps = false;
    protected $primaryKey = 'id_po';

}