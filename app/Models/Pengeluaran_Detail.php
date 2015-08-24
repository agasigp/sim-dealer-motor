<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran_Detail extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table   = 'pengeluaran_detail';
    public $timestamps = false;
    protected $primaryKey = 'id_pengeluaran_detail';

}