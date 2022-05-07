<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $table='Cv';
    protected $fillable = ['nom', 'prenom', 'image', 'adresse', 'mail', 'numero' ,'fb', 'likedin'
    ,'description', 'titre-experience','lieu-experience', 'desc-experience','date-experience', 
    'titre-education','lieu-education', 'desc-education','date-education',
    'competence', 'interet','certif',
];

}
