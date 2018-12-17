<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable =['merk_id','harga','ukuran','slug','kategori_id','deskripsi','stock'];
    public $timestamps = true;
    public function merk()
	{
		return $this->belongsTo('App\Merk','merk_id');
	}

	public function kategoriproduk()
	{
		return $this->belongsTo('App\KategoriProduk','kategori_id');
	}

	public function produkfoto()
	{
    	return $this->hasMany('App\ProdukFoto','produk_id');
    }

    public function cart()
    {
        return $this->hasMany('App\Cart');
    }

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
