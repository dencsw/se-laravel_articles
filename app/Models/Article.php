<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'author', 'symbol_code'
    ];

    protected static function booted()
    {
        static::creating(function ($article) {
            $article->symbol_code = Str::slug($article->title, '-');
            $article->symbol_code = substr($article->symbol_code, 0, 100);
        });
    }

    // Связь "многие ко многим" с тегами
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
