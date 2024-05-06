<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = ['dish_name','dish_body'];
    public function Images(){
        return $this->hasMany(Image::class);
    }
}
