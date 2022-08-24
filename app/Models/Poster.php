<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;
    protected $table = 'posters';
    protected $guarded=['id'];

    public function getCategory(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function getUser(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
