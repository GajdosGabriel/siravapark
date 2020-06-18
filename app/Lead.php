<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'estate', 'domes', 'interested', 'buy_from', 'buy_to', 'rent_from', 'rent_to', 'favorite', 'comment'];

    public static function search($base, $search)
    {
        return $base->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        });
    }
}
