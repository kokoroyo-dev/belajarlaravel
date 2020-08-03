<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'kode_mk';

    public function dosen()
    {
    	return $this->belongsTo('App\dosen','mata_kuliah','kode_mk');
    }
}
