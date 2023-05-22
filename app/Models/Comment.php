<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function campaing(){
        return $this->belongsTo(Campaing::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
