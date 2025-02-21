<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;

class Annonce extends Model
{
    protected $table = 'annonce';
    protected $fillable = [
        'title',
        'description',
        'cover',
        'date',
        'place',
        'phone',
        'type',
        'category_id',
        'users_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'annonce_id');
    }
}
