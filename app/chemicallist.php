<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chemicallist extends Model
{
    protected $table = 'chemicallist';
    protected $fillable = [
        'chemical_name', 'oralS', 'formula', 'oralR',
    ];
}
