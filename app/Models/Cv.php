<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table='Cv';
    protected $fillable = ['nom', 'prenom', 'image', 'adresse', 'mail', 'numero' ,'fb', 'linkedin'
    ,'description', 'competence', 'interet',];

}
