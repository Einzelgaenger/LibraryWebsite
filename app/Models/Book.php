<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'category', 'pages', 'published_year', 'is_available'];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}

