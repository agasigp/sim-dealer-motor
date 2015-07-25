<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'produk';
    public $timestamps    = false;
    protected $primaryKey = 'id_produk';

}