<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chemicaldata extends Model
{
    protected $fillable = ['chemicalid', 'CiS', 'CiG', 'CiSW', 'userid',];
    protected $with=[
        'chemical',
    ];
    public function chemical()
    {
        return $this->belongsTo(chemicallist::class, 'chemicalid');
    }
}
