<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $table='Candidat';
    protected $fillable = ['nom','pays','mail','numero','cv'];
    use HasFactory;
}
