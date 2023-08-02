<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected  $fillable = [
        'id',
        'product_id',
        'feature_image',
        'multiple_image',
        'created_at',
        'updated_at',

    ];
    //product relation
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
