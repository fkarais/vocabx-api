<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /** @use HasFactory<\Database\Factories\WordFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'language_code',
        'word',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(language::class, 'language_code');
    }
}
