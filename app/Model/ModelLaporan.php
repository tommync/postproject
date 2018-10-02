<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ModelLaporan extends Model
{
    protected $table ='laporan';


    protected $primaryKey = 'laporan_id';

    protected $fillable = [
        'toko_id',
        'produk_id',
        'target',
    	'hasil'
    ];

    public $timestamps = false;

    public function getTokoIdAttribute($value) {
        return $value;
    }

    public function produk() {
        return $this->belongsTo('App\Model\ModelProduk', 'produk_id','produk_nama');
    }
    
    public function toko(){
        return $this->belongsTo('App\Model\ModelToko', 'toko_id');
    }
}
