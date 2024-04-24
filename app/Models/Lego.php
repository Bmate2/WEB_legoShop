<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lego extends Model
{
    use HasFactory;
    protected $fillable=[
        "code",
        "name",
        "price",
        "pieces",
        "category_id",
        "image",
    ];
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}