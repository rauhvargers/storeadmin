<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'production_year'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }



    public function Artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function scopeActive($query)
    {
        return $query->where("is_active", "=", true);
    }
    /**
     * Filters coins by a given category
     */
    public function scopeInCategory($query, $categoryId)
    {
        return $query->where("category_id", "=", $categoryId);
    }
    /**
     * Filters coins by production year
     */
    public function scopeYear($query, $year)
    {
        return $query->where("production_year", "=", $year);
    }
}
