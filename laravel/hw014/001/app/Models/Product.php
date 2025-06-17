<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sku',
    ];
    

    // Определяем связь "многие к одному" с категориями
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
