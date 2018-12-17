<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable =['cover','judul','deskripsi','slug','kategori_id'];
    public $timestamps = true;

     public function kategoriartikel()
	{
		return $this->belongsTo('App\KategoriArtikel','kategori_id');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
