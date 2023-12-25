<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    // public function subcategories(){
    //     return $this->belongsToMany(subcategory::class,'jobs');
    // } 
    // public function categories(){
    //     return $this->belongsToMany(cartegory::class,'jobs');
    // }
    // public function users(){
    //     return $this->belongsToMany(User::class,'jobs');
    // }
}
