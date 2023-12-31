<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'category_id',
        'price',
        'created_at',
        'updated_at',

    ];
 

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //gallery relation
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
