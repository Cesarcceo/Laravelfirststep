<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'categorie_id',
        'description',
        'posted',
        'image',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
