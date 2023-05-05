<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

   protected $fillable=['title', 'url', 'production_year'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Artist(){
        return $this->belongsTo(Artist::class);
    }

    public function scopeInCateogry($query, $categoryId) {
        return $query->where("category_id", "=", $categoryId);

    }
}
