<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['legoId','rating','comment','userId'];
    protected $table='review_ratings';

    public function Lego(){
        return $this->belongsToMany(Lego::class,'legoId');
    }
    public function User(){
        return $this->belongsTo(User::class,'userId');
    }
}
