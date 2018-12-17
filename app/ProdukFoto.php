<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukFoto extends Model
{
    protected $table = 'produk_fotos';
    protected $fillable = array('foto','produk_id');
    public $timestamps = true;

    public function Produk() {
        return $this->belongsTo('App\Produk','produk_id');
    }
}
