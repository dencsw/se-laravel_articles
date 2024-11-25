<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol_code', 'name',
    ];
    public $timestamps = false;
    protected static function booted()
    {
        static::creating(function ($tag) {
            $tag->symbol_code = Str::slug($tag->name, '-');
            $tag->symbol_code = substr($tag->symbol_code, 6, 50);
        });
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}



