<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ["name","webpage"];
    protected $table = "manufacturers";
    public $timestamps = false;
    public function tablets() {
        return $this->hasMany(Tablet::class,'manufacturer_id','id');

    }
}
