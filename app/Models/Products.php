<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{ // In your Products model
    protected $fillable = ['name', 'description','ram','storage','water_resistant', 'categories', 'price', 'images'];

 protected $casts = [
    'images' => 'array',
];



}

