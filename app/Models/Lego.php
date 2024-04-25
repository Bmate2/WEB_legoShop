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
    ];
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Review(){
        return $this->hasMany(Review::class,"legoId","id");
    }

    public function getRatingAttribute() {
        $rating=$this->review;
        $avarage=0;
        foreach($rating as $rate){
            $avarage+=$rate->rating;
        }
        if($avarage==0 || $rating->Count()==0){
            return 0;
        }
        $avarage=$avarage/$rating->Count();
        return round($avarage,2);
    }
    
    
}