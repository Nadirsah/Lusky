<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table="items";

    protected $fillable=[
        "category_id",
        "basliq"
    ];

     public function kategory(){

        return $this->belongsTo("App\Models\Kategory","category_id",'id');
 }
}
