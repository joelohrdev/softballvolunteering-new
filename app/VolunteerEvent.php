<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerEvent extends Model
{
    protected $dates = [
        'date_time',
    ];

    protected $fillable = [
        'volunteercategory_id',
        'name',
        'date_time',
        'details',
        'attended',
        'notes'
    ];

    public function volunteereventable()
    {
        return $this->morphTo();
    }

    public function volunteercategory()
    {
        return $this->belongsTo(VolunteerCategory::class);
    }
}
