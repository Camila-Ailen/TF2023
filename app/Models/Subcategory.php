<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at','updated_at'];

    //relacion uno a muchos
    public function products() {
        return $this->hasMany(Product::class);
    }

    //relacion uno a muchos inversa
    public function category() { //singular porque es una sola categoria
        return $this->belongsTo(Category::class);
    }
    
}
