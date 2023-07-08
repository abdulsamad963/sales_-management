<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable=['name','type','price','Notes','customer_id','amount'];

    // public function customer()
    // {
    //     return $this->belongsTo('App\customer','customer_id');
    // }
}
