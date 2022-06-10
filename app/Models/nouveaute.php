<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nouveaute extends Model
{
    protected $table='nouveautes';
    protected $fillable = ['id','url_image'];
    use HasFactory;
}
