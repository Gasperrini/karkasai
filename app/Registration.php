<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['vardas', 'pavarde', 'el_pastas', 'tel_nr', 'mokytojas_id'];
}
