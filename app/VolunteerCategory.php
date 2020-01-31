<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerCategory extends Model
{
    protected $fillable = [
        'category',
    ];

    public function volunteerevents()
    {
        return $this->hasMany(VolunteerEvent::class);
    }
}
