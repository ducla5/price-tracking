<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function links() {
        return $this->hasMany(Link::class);
    }
}
