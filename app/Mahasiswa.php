<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // jika nama table berbeza dngn singular model
    protected $table = 'mahasiswas';
}
