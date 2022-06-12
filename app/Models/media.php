<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $table='Media';
    protected $fillable = ['nom','adresse','chapitre_id'];
    
    use HasFactory;
}
