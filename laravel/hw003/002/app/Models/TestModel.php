<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;
    //
    protected $table = 'test'; // имя таблицы
    protected $connection= 'mysql'; // база, к которой надо подключиться
    protected $primaryKey = 'test_id'; // первичный ключ и название столбца таблицы
    public $incrimenting = true; // включает авто инкремент для поля
    public $timestamps = true; // обновление при обновлении строки
    protected $fillable = ['test_attribute1', 'test_attribute2']; // собственные поля к модели, каждому атрибуту будут соответствовать свои колонки в БД
}
