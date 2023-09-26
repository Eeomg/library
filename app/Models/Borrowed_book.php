<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowed_book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'books_id',
        'users_id',
        'borrowed_date',
        'return_date'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function books()
    {
        return $this->belongsTo(book::class);
    }
}
