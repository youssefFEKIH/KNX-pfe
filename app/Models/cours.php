<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    use HasFactory;
    protected $table='Cours';
    protected $fillable = ['nom','description','type','url_image'];

    public function chapitres()
    {
        return $this->hasMany('App\Models\chapitre');
    }
    public function tests()
    {
        return $this->hasMany('App\Models\test');
    }
}
