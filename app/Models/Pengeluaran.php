<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'pengeluaran';
    public $timestamps = false;
    protected $primaryKey = 'id_pengeluaran';

}