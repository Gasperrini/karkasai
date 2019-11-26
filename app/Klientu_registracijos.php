<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klientu_registracijos extends Model
{
    protected $fillable = ['vardas', 'pavarde', 'el_pastas', 'tel_nr', 'mokytojas_id'];
}
