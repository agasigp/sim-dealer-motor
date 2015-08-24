<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'gaji';
    public $timestamps = false;
    protected $primaryKey = 'id_gaji';

}