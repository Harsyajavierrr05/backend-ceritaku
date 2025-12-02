<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function user() // Owned by single user
    {
    return $this->belongsTo(User::class);
    }

    public function chapters() // has many chapters
    {
    return $this->hasMany(Chapter::class);
    }

    // app/Models/Story.php

    protected $fillable = [
    'user_id',
    'title',
    'summary',
    'status',
    'is_published',
    // ... kolom yang bisa diisi
    ];

}

