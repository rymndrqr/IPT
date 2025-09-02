<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['orderid', 'status_id', 'quantity'. 'price'];

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }

}
