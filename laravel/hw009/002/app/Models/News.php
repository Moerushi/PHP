<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'hidden'
    ];

    public static function boot()
    {
        parent::boot();
        static::updating(function (News $news) {
            Log::info('Updating' . $news);
        });
    }
}
