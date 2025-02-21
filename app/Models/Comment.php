<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Annonce;
use App\Models\User;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'comment',
        'annonce_id',
        'membre_id'
    ];

    public function annonce(){
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'membre_id');
    }
}
