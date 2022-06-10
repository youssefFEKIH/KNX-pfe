<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{   
    protected $table='reponses';
    protected $fillable = ['id','contenu'];
    use HasFactory;
}
