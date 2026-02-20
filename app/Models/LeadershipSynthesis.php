<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeadershipSynthesis extends Model
{
    protected $fillable = [
        'profile_id',
        'synthesis_text',
        'certificate_token',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(MiniExperienceProfile::class, 'profile_id');
    }
}
