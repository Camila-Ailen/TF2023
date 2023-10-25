<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'statusable_id', 'statusable_type'];

    //relacion uno a muchos polimorfica
    public function statusable(){
        return $this->morphTo();
    }
}
