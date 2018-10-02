<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ModelProduk extends Model
{
    
	protected $table ='produk';


    protected $primaryKey = 'produk_id';

    protected $fillable = [
        'produk_nama',
        'produk_desc',
    	'produk_harga'
    ];

    public $timestamps = false;

    public function getProdukIdAttribute($value) {
        return $value;
    }

    public function laporan()
    {
        return $this->hasMany('App\Model\ModelLaporan', 'produk_id','produk_nama');
    }
    
}
