<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function akun()
    {
    	return $this->belongsTo(Akun::class,'id_akun');
    }
}
