<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable =['nama','foto'];
    public $timestamps = true;

    public function Produk()
	{
		return $this->hasMany('App\Produk','merk_id');
	}
}
