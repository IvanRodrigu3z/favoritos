<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
    
    use HasFactory;

    public function favoritos(){
        return $this->belongsToMany(Favorite::class, 'category_favorite');
    }
}
