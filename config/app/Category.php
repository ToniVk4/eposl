<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name', 'id'];

    public function products_() {
        return $this->hasMany(Product::class);
    }
}
