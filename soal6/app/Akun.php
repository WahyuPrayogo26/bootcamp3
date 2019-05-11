<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $guarded = [];

    public function skill()
    {
    	return $this->belongsTo(Skill::class);	
    }
}
