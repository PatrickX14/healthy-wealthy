<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $primarykey = 'id';
    protected $fillable = [
        'foodname',
        'foodkcal',
        'foodcategory',
        'disease',
        'foodingr',
        'foodrecipe',
        'video',
        'picture',
        'refer'
    ];
}
