<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homepages extends Model
{
    protected $fillable = [
        'section_name', 'content'
    ];

    protected $casts = [
        'content' => 'array',
    ];
}
