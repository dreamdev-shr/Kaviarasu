<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(product::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function countrie(){
        return $this->belongsTo(countrie::class);
    }
}
