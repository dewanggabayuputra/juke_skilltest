<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;

    protected $table = 'table_todos';

    protected $fillable = [
        'title',
        'completed',
    ];

}
