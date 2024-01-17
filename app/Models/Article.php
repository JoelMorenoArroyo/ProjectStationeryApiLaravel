<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'stock',
        'price',
        'image',
        'category_id'
    ];
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
