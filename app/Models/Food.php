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
        'diseases_id',
        'foodingr',
        'foodrecipe',
        'video',
        'picture',
        'refer'
    ];
    protected $casts =[
        'foodingr' => 'array',
        'foodrecipe' => 'array'
    ];

    /**
     * Get the disease that owns the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diseases()
    {
        return $this->belongsTo(Disease::class, 'diseases_id');
    }
}
