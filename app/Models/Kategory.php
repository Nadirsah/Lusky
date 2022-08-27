<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    use HasFactory;
    protected $table="kategories";

    protected $fillable=[
        "basliq",
        "image"
    ];

    public function items(){

        return $this->hasMany(Items::class,'category_id',"id");
    }
}
