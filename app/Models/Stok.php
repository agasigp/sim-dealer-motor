<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'stok';
    public $timestamps    = false;
    protected $primaryKey = 'id_stok';

}