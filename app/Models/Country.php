<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $guarded=['id'];

    public function getUser(){
        return $this->hasOne('App\Models\User','country_id','id');
    }
}
