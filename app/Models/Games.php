<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Games extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'year',
        'price',
        'url',
        'description',
        'user_id',
    ];
}
