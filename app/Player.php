<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'division',
        'attended',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function volunteerevents()
    {
        return $this->morphMany(VolunteerEvent::class, 'volunteereventable');
    }
}
