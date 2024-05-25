<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = ['promotion_name','promotion_body','promotion_price'];

    public function photos(){
        return $this->hasMany(Photo::class);
    }
}





    

