<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'items_id',
        'basliq',
    ];

    public function item()
    {
        return $this->belongsTo("App\Models\Items", 'items_id', 'id');
    }
}
