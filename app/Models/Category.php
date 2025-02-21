<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Annonce;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name'];

    public function annonces(){
        return $this->hasMany(Annonce::class, 'category_id');
    }
}
