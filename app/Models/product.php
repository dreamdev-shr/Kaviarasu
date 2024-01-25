<?php

namespace App\Models;

use App\Models\order_item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function order_item(){
        return $this->hasMany(order_item::class);
    }

    public function merchant(){
        return $this->belongsTo(merchant::class);
    }

}
