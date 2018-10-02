<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ModelToko extends Model
{
    protected $table ='toko';


    protected $primaryKey = 'toko_id';

    protected $fillable = [
        'toko_nama',
        'toko_alamat',
    	'toko_telp'
    ];

    public $timestamps = false;

    public function getTokoIdAttribute($value) {
        return $value;
    }

    public function laporan()
    {
        return $this->hasMany('App\Model\ModelLaporan', 'laporan_id');
    }
}
