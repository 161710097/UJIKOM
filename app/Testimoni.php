<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimonis';
    protected $fillable =['foto','nama','deskripsi','profesi'];
    public $timestamps = true;
}
