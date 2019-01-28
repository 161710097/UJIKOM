<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable =['user_id','produk_id','quantity'];
    public $timestamps = true;

    public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
	public function transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
	public function produk()
	{
		return $this->belongsTo('App\Produk','produk_id');
	}
}
