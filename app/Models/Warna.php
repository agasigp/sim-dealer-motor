<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'warna';
    public $timestamps = false;
    protected $primaryKey = 'id_warna';

}