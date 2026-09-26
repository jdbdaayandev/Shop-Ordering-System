<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    protected $fillable = ['item_number','name', 'description', 'category_id', 'price', 'stock_quantity', 'image', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
