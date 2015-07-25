<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'supplier';
    public $timestamps    = false;
    protected $primaryKey = 'id_supplier';

}