<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exp extends Model
{
    protected $table='Exp';
    protected $fillable = ['titre_experience','lieu_experience', 'desc_experience','date_experience'];
    
    use HasFactory;
}
