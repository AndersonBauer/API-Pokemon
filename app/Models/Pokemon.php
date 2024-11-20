<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Schema;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'type',
        'power_of_points',
        'coach_id'
    ];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }
}