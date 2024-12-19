<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name', 'description', 'location', 'focus_area', 'organization_type', 'logo_url'
    ];

    public function activities()
    {
        return $this->hasMany(activities::class);
    }
}