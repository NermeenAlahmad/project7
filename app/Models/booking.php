<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }


    use HasFactory;


    protected $fillable = [
        'book_status',
        'book_price',
        'user_id',
        'movie_id',
    ];
}
