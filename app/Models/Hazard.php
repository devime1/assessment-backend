<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hazard extends Model
{
    protected $fillable = [
        'assessment_id',
        'title',
        'description',
        'risk_level',
        'likelihood',
        'severity',
    ];

    public function assessment(): BelongsTo
    {
        return $this->belongsTo(Assessment::class);
    }
}
