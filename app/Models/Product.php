<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'description', 'price', 'category_id','image'];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function getRouteKeyName()
    {
        return 'price';
    }
}
