<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $fillable = ["name","screen_size","ram","storage","mobile_network","price","manufacturer_id",'profit'];
    protected $table = "tablets";
    public $timestamps = false;
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class,'manufacturer_id','id');
    }
}
