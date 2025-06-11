<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    /** @use HasFactory<\Database\Factories\TaskUserFactory> */
    use HasFactory;

    public $fillable = ['name', 'surname', 'email'];
}
