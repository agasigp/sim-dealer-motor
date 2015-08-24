<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'penerimaan';
    public $timestamps = false;
    protected $primaryKey = 'id_penerimaan';

}