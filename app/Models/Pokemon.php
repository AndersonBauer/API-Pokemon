<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'type',
        'power_of_points'
        ];
}