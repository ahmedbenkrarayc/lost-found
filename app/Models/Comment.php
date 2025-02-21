<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'comment',
        'annonce_id',
        'membre_id'
    ];
}
