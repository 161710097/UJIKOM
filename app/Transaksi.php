<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $fillable =['cart_id','nama','nama_lengkap','no_telpon','email','alamat'];
    public $timestamps = true;
	public function cart()
	{
		return $this->belongsTo('App\Cart','cart_id');
	}
}
