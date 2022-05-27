<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouv extends Model
{
    use HasFactory;
    protected $table='nouv';
    protected $fillable = ['titre', 'description', 'url_nouveaute','type'];
    
}

