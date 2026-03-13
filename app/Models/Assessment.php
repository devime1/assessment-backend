<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assessment extends Model
{
    protected $fillable = [
        'title',
        'status',
        'review_date',
        'notes',
    ];

    public function hazards(): HasMany
    {
        return $this->hasMany(Hazard::class);
    }
}