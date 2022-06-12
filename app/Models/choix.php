<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choix extends Model
{
    use HasFactory;
    protected $table='choixes';
    protected $fillable = ['choix','type','enonce_id'];
    
}
