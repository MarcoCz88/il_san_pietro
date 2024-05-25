<?php

namespace App\Models;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['promotion_id','path'];
    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }
}
