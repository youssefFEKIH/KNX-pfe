<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courp extends Model
{
    protected $table='Courp';
    protected $fillable = ['nom','resumer','description','dated','heured','datef','heuref','statut','url_image'];
    use HasFactory;
}
