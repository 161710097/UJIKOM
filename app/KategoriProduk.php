<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produks';
    protected $fillable =['nama','slug'];
    public $timestamps = true;

    public function Produk()
	{
		return $this->hasMany('App\Produk','kategori_id');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
