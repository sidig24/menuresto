<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $fillable = ['name', 'description', 'price'];
    // Accessor untuk format harga
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', '.') . ' IDR';
    }

}




