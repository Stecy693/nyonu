<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MiniExperienceProfile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'age',
        'education_level',
        'description',
        'checked_assertions',
    ];

    protected $casts = [
        'checked_assertions' => 'array',
    ];

    public function syntheses(): HasMany
    {
        return $this->hasMany(LeadershipSynthesis::class, 'profile_id');
    }
}
