<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'service',
        'date',
        'time',
        'name',
        'email',
        'phone',
        'message',
        'status',
    ];
}
