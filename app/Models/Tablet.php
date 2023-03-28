<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $table = "tablets";
    public $timestamps = false;
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class,'id',',manufacturer_id');
    }
}
