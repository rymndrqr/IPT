<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illiminate\Database\Eloquent\Factories\HasFactory;


class Merchandise extends Model
{
    
    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
