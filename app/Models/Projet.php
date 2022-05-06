<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table='projet';
    protected $fillable = ['url_image', 'titre', 'description'];
    use HasFactory;
}
