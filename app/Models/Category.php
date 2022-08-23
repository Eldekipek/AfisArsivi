<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded=['id'];

    public function getPoster(){
        return $this->hasMany('App\Models\Poster','category_id','id');
    }
}
