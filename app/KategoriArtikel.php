<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table = 'kategori_artikels';
    protected $fillable =['nama','slug'];
    public $timestamps = true;

    public function Artikel()
	{
		return $this->hasMany('App\Artikel','kategori_id');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
