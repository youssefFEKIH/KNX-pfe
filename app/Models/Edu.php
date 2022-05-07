<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edu extends Model
{
    use HasFactory;
    protected $table='Edu';
    protected $fillable = ['titre_education','lieu_education', 'desc_education','date_education'];
}
