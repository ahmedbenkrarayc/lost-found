<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

}
