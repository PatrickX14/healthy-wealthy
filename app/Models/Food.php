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

    /**
     * Get the disease that owns the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disease(): BelongsTo
    {
        return $this->belongsTo(Disease::class);
    }
}
