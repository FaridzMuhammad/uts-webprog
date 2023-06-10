<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class skill extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = [
        'name',
        'category_id',
        'title',
        'percentage',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
