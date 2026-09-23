<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'body',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
