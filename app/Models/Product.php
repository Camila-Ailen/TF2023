<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at','updated_at'];

    //relacion uno a muchos inversa
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function unit() {
        return $this->belongsTo(Unit::class);
    }


    //relacion uno a muchos polimorfica
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function status() {
        return $this->morphMany(Status::class, 'statusable');
    }
}
