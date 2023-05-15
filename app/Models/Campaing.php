<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}

